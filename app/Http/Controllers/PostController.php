<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostImage;
use App\Models\Hashtag;
use App\Models\PostHashtag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['images', 'hashtags'])->get();
        return response()->json($posts);
    }

    public function show($id)
    {
        $post = Post::with(['images', 'hashtags'])->find($id);
        if ($post) {
            return response()->json($post);
        } else {
            return response()->json(['message' => 'Post not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'content' => 'required|max:250',
            'images.*' => 'nullable|string' // Assume images are provided as temporary file paths
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $post = new Post();
        $post->user_id = $request->user_id;
        $post->content = $request->content;
        $post->save();

        // Handle images
        if ($request->has('images')) {
            foreach ($request->images as $image_path) {
                $filename = basename($image_path);
                $new_path = 'uploads/img/posts/' . $filename;

                // Move the file from the temporary location to the permanent location
                if (file_exists(public_path($image_path))) {
                    rename(public_path($image_path), public_path($new_path));
                }

                // Save image path to the database
                PostImage::create([
                    'post_id' => $post->id,
                    'image_url' => $new_path,
                ]);
            }
        }

        // Handle hashtags
        $this->handleHashtags($post, $request->content);

        return response()->json($post->load(['images', 'hashtags']), 201);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->content = $request->content ?? $post->content;
            $post->save();

            // Handle images
            if ($request->has('images')) {
                // Delete existing images
                $post->images()->delete();
                
                // Add new images
                foreach ($request->images as $image_path) {
                    $filename = basename($image_path);
                    $new_path = 'uploads/img/posts/' . $filename;

                    // Move the file from the temporary location to the permanent location
                    if (file_exists(public_path($image_path))) {
                        rename(public_path($image_path), public_path($new_path));
                    }

                    // Save image path to the database
                    PostImage::create([
                        'post_id' => $post->id,
                        'image_url' => $new_path,
                    ]);
                }
            }

            // Handle hashtags
            $this->handleHashtags($post, $request->content);

            return response()->json($post->load(['images', 'hashtags']));
        } else {
            return response()->json(['message' => 'Post not found'], 404);
        }
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post) {
            // Delete images from the server
            foreach ($post->images as $image) {
                $image_path = public_path($image->image_url);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
                $image->delete();
            }

            $post->delete();
            return response()->json(['message' => 'Post deleted']);
        } else {
            return response()->json(['message' => 'Post not found'], 404);
        }
    }

    private function handleHashtags(Post $post, $content)
    {
        // Extract hashtags from the content
        preg_match_all('/#(\w+)/', $content, $matches);
        $hashtags = $matches[1];

        // Sync hashtags with the post
        $hashtagIds = [];
        foreach ($hashtags as $hashtag) {
            $hashtagModel = Hashtag::firstOrCreate(['name' => $hashtag]);
            $hashtagIds[] = $hashtagModel->id;
        }

        $post->hashtags()->sync($hashtagIds);
    }
}
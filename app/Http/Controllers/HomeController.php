<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $posts = Post::with('images', 'user')->get(); // Mengambil semua data Post beserta relasi images dan user
        return view('home.index', compact('user', 'posts'));
    }
}
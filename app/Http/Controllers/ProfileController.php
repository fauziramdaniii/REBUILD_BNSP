<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }

    /**
     * Update the profile in storage.
     */
    public function updateProfile(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'bio' => 'nullable|string|max:500',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $user = Auth::user();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->bio = $request->input('bio');
    
        if ($request->hasFile('profile_picture')) {
            $fileName = time() . '.' . $request->profile_picture->extension();  
            $request->profile_picture->move(public_path('uploads/img/'), $fileName);
            $user->profile_picture = $fileName;
        }
    
        $user->save();
    
        return response()->json(['success' => 'Profile updated successfully.']);
    }
    
}
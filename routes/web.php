<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
// Redirect root to home
Route::get('/', function () {
return redirect()->intended('/home');
});

// Auth routes
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes
Route::middleware('auth')->group(function () {
// Tab Home
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::post('/posts', [PostController::class, 'store']);
Route::put('/posts/{id}', [PostController::class, 'update']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);
Route::post('/upload_temp', function (Request $request) {
    $file = $request->file('file');
    $path = $file->move(public_path('uploads/temp'), $file->getClientOriginalName());
    return response()->json(['filepath' => 'uploads/temp/' . $file->getClientOriginalName()], 200);
});



// Tab Profile
Route::get('/tag', [TagController::class, 'index'])->name('tag');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');

});
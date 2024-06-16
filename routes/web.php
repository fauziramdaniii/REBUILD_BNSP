<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;

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
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('/tag', [TagController::class, 'index'])->name('tag');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
});
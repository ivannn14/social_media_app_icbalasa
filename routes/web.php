<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Profile routes
Route::middleware('auth')->group(function () {
    // Show the profile page
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    
    // Show the profile edit form
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    
    // Update profile information
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    // Delete the profile
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Show the user's posts
    Route::get('/profile/posts', [ProfileController::class, 'posts'])->name('profile.posts');
});

Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

Route::post('/posts/{post}/like', [App\Http\Controllers\PostController::class, 'like'])->name('posts.like');

Route::post('/posts/{post}/comment', [CommentController::class, 'store'])->name('posts.comment');

Route::get('/posts/{slug}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::post('/posts/{post}/share', [App\Http\Controllers\PostController::class, 'share'])->name('posts.share');

Route::delete('/posts/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/debug-posts', function () {
    if (Auth::check()) {
        $user = Auth::user();
        $postsCount = $user->posts()->count();
        $sharedPostsCount = $user->sharedPosts()->count();
        
        return "User ID: {$user->id}, Posts: {$postsCount}, Shared Posts: {$sharedPostsCount}";
    } else {
        return "No authenticated user";
    }
});

Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::patch('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

require __DIR__.'/auth.php';

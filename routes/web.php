<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
<<<<<<< HEAD
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\FriendController;
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
=======
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845

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
<<<<<<< HEAD
});

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::post('/posts/{post}/like', [PostController::class, 'like'])->name('posts.like');

Route::post('/posts/{post}/comment', [CommentController::class, 'store'])->name('posts.comment');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

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

Route::delete('/posts/{post}/unshare', [PostController::class, 'unshare'])->name('posts.unshare');

Route::get('/notifications', [NotificationController::class, 'index'])->middleware('auth')->name('notifications.index');

Route::get('/notifications/get', 'NotificationController@getNotifications')->name('notifications.get');
Route::post('/notifications/mark-as-read', [NotificationController::class, 'markAsRead']);

Route::post('/notifications/{notification}/mark-as-read', [NotificationController::class, 'markAsRead'])
    ->name('notifications.markAsRead');

Route::post('/notifications/{id}/mark-as-read', function($id) {
    auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
    return back();
})->name('notifications.markAsRead');

Route::get('/accounts/create', [AccountController::class, 'create'])->name('accounts.create');
Route::post('/accounts', [AccountController::class, 'store'])->name('accounts.store');

Route::get('/friends', [FriendController::class, 'index'])->name('friends.index');
Route::post('/friends', [FriendController::class, 'store'])->name('friends.store');
Route::put('/friends/{friend}', [FriendController::class, 'update'])->name('friends.update');
Route::delete('/friends/{friend}', [FriendController::class, 'destroy'])->name('friends.destroy');

Route::post('/posts/{postId}/like', [PostController::class, 'likePost']);
Route::post('/posts/{postId}/comment', [PostController::class, 'commentPost']);
Route::post('/posts/{postId}/share', [PostController::class, 'sharePost']);

Route::get('/check-notifications', function () {
    return auth()->user()->notifications;
});

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/check-user', function () {
    $user = auth()->user()->fresh();
    return response()->json([
        'id' => $user->id,
        'name' => $user->name,
        'email' => $user->email
    ]);
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
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

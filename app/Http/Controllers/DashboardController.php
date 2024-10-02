<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class DashboardController extends Controller
{
    /**
     * Show the dashboard.
     */
    public function index()
    {
<<<<<<< HEAD
        $posts = Post::with(['user', 'likes', 'comments.user'])->latest()->get();
        $sharedPosts = auth()->user()->sharedPosts()->with(['user', 'likes', 'comments.user'])->latest()->get();
=======
<<<<<<< HEAD
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $posts = Post::with(['user', 'likes', 'comments.user'])->latest()->get();
        $sharedPosts = Auth::user()->sharedPosts()->with(['user', 'likes', 'comments.user'])->latest()->get();

=======
        $posts = Post::with(['user', 'likes', 'comments.user'])->latest()->get();
        $sharedPosts = auth()->user()->sharedPosts()->with(['user', 'likes', 'comments.user'])->latest()->get();
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        return view('dashboard', compact('posts', 'sharedPosts'));
    }
}

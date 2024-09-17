<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class DashboardController extends Controller
{
    /**
     * Show the dashboard.
     */
    public function index()
    {
        $posts = Post::with(['user', 'likes', 'comments.user'])->latest()->get();
        $sharedPosts = auth()->user()->sharedPosts()->with(['user', 'likes', 'comments.user'])->latest()->get();
        return view('dashboard', compact('posts', 'sharedPosts'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Show the dashboard.
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $posts = Post::with(['user', 'likes', 'comments.user'])->latest()->get();
        $sharedPosts = Auth::user()->sharedPosts()->with(['user', 'likes', 'comments.user'])->latest()->get();

        return view('dashboard', compact('posts', 'sharedPosts'));
    }
}

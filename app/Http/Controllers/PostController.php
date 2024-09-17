<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|max:1000',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB Max
        ]);

        $post = new Post();
        $post->content = $validatedData['content'];
        $post->user_id = auth()->id();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('post-images', 'public');
            $post->image_path = $imagePath;
        }

        $post->save();

        return back()->with('success', 'Post created successfully!');
    }

    public function like(Post $post)
    {
        $user = auth()->user();
        $liked = !$post->isLikedBy($user);

        if ($liked) {
            $post->likes()->create(['user_id' => $user->id]);
        } else {
            $post->likes()->where('user_id', $user->id)->delete();
        }

        return response()->json([
            'success' => true,
            'likes_count' => $post->likes()->count(),
        ]);
    }

    public function comment(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $comment = $post->comments()->create([
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'comment' => [
                    'content' => $comment->content,
                    'user' => [
                        'name' => $comment->user->name,
                    ],
                ],
            ]);
        }

        return redirect()->back()->with('success', 'Comment posted successfully!');
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }

    public function share(Request $request, Post $post)
    {
        $user = auth()->user();
        
        if (!$post->sharedBy->contains($user)) {
            $user->sharedPosts()->attach($post);
            $post->increment('shares_count');
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'shares_count' => $post->shares_count
                ]);
            }
            return redirect()->back()->with('success', 'Post shared successfully!');
        }
        
        if ($request->ajax()) {
            return response()->json([
                'success' => false,
                'shares_count' => $post->shares_count
            ]);
        }
        
        return back()->with('info', 'You have already shared this post.');
    }

    public function destroy(Post $post)
    {
        if (auth()->user()->id !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $post->delete();

        return back()->with('success', 'Post deleted successfully!');
    }
}

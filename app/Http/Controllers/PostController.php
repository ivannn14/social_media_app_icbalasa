<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|max:1000',
            'media' => 'required|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi|max:10240', // 10MB Max
        ]);

        $post = new Post();
        $post->content = $validatedData['content'];
        $post->user_id = auth()->id();

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(20) . '.' . $extension;
            
            if (in_array($extension, ['jpeg', 'png', 'jpg', 'gif'])) {
                $path = $file->storeAs('post-images', $filename, 'public');
                $post->image_path = $path;
            } elseif (in_array($extension, ['mp4', 'mov', 'avi'])) {
                $path = $file->storeAs('post-videos', $filename, 'public');
                $post->video_path = $path;
            }
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

    public function share(Post $post)
    {
        try {
            auth()->user()->sharedPosts()->attach($post->id);
            return back()->with('success', 'Post shared successfully!');
        } catch (\Illuminate\Database\QueryException $e) {
            // Check if the error is due to a duplicate entry
            if ($e->errorInfo[1] == 1062) {
                return back()->with('error', 'You have already shared this post.');
            }
            // For other database errors
            return back()->with('error', 'An error occurred while sharing the post.');
        }
    }

    public function destroy(Post $post)
    {
        if (auth()->user()->id !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $post->delete();

        return back()->with('success', 'Post deleted successfully!');
    }

    public function index()
    {
        // Fetch only original posts (not shared) for the main feed
        $posts = Post::with('user', 'likes', 'comments')
            ->whereNull('original_post_id')  // Assuming you have this column to track shared posts
            ->latest()
            ->get();

        // Fetch shared posts separately
        $sharedPosts = auth()->user()->sharedPosts()->with('user')->latest()->get();
        
        return view('dashboard', compact('posts', 'sharedPosts'));
    }

    public function unshare(Post $post)
    {
        // Check if the authenticated user has shared this post
        $sharedPost = auth()->user()->sharedPosts()->where('post_id', $post->id)->first();

        if ($sharedPost) {
            // Remove the share relationship
            auth()->user()->sharedPosts()->detach($post->id);

            return back()->with('success', 'Shared post removed successfully.');
        }

        return back()->with('error', 'You have not shared this post.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
<<<<<<< HEAD
use Illuminate\Support\Str;
=======
<<<<<<< HEAD
use Illuminate\Support\Str;
use App\Notifications\PostLiked;
use App\Notifications\PostCommented;
use App\Notifications\PostShared;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
<<<<<<< HEAD
            'content' => 'required|max:1000',
            'media' => 'required|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi|max:10240', // 10MB Max
=======
<<<<<<< HEAD
            'content' => 'required|string|max:1000',
            'media' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi,wmv|max:100000', // Increased max size and added video formats
        ]);

        $post = new Post();
        $post->user_id = auth()->id();
        $post->content = $validatedData['content'];

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = $file->storeAs('public/post_media', $filename);
            $post->media_path = 'post_media/' . $filename;
            $post->media_type = $file->getClientMimeType(); // Store the media type
=======
            'content' => 'required|max:1000',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB Max
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        ]);

        $post = new Post();
        $post->content = $validatedData['content'];
        $post->user_id = auth()->id();

<<<<<<< HEAD
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
=======
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('post-images', 'public');
            $post->image_path = $imagePath;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        }

        $post->save();

<<<<<<< HEAD
=======
<<<<<<< HEAD
        return redirect()->route('dashboard')->with('success', 'Post created successfully!');
    }

    public function like(Request $request, Post $post)
    {
        $user = auth()->user();
        $liked = $request->json('liked');

        Log::info('Like action', ['user_id' => $user->id, 'post_id' => $post->id, 'liked' => $liked]);

        if ($liked) {
            // Like the post if not already liked
            if (!$post->likes()->where('user_id', $user->id)->exists()) {
                $post->likes()->attach($user->id);
                Log::info('Post liked', ['user_id' => $user->id, 'post_id' => $post->id]);
                
                // Send notification to post owner if it's not their own post
                if ($post->user_id !== $user->id) {
                    $post->user->notify(new PostLiked(auth()->id(), $post->id));
                }
            }
        } else {
            // Unlike the post
            $post->likes()->detach($user->id);
            Log::info('Post unliked', ['user_id' => $user->id, 'post_id' => $post->id]);
        }

        $updatedLikesCount = $post->likes()->count();
        $isLiked = $post->likes()->where('user_id', $user->id)->exists();

        Log::info('Like action result', [
            'user_id' => $user->id,
            'post_id' => $post->id,
            'likes_count' => $updatedLikesCount,
            'is_liked' => $isLiked
        ]);

        return response()->json([
            'success' => true,
            'likes_count' => $updatedLikesCount,
            'is_liked' => $isLiked,
=======
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
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
<<<<<<< HEAD
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
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

<<<<<<< HEAD
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
=======
<<<<<<< HEAD
    public function show(Post $post)
    {
        $post->load('user');  // Eager load the user relationship
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
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
<<<<<<< HEAD
=======
=======
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
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
    }

    public function destroy(Post $post)
    {
        if (auth()->user()->id !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $post->delete();

        return back()->with('success', 'Post deleted successfully!');
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f

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
<<<<<<< HEAD
=======

    public function likePost(Request $request, $postId)
    {
        $post = Post::findOrFail($postId);
        $user = Auth::user();

        // Logic to like the post
        $post->likes()->attach($user->id);

        // Notify the post owner
        $postOwner = $post->user;
        $postOwner->notify(new PostLiked($user, $post));

        return response()->json(['status' => 'success']);
    }

    public function commentPost(Request $request, $postId)
    {
        $post = Post::findOrFail($postId);
        $user = Auth::user();

        // Logic to comment on the post
        $comment = $post->comments()->create([
            'user_id' => $user->id,
            'content' => $request->input('content'),
        ]);

        // Notify the post owner
        $postOwner = $post->user;
        $postOwner->notify(new PostCommented($user, $post));

        return response()->json(['status' => 'success']);
    }

    public function sharePost(Request $request, $postId)
    {
        $post = Post::findOrFail($postId);
        $user = Auth::user();

        // Logic to share the post
        $share = $post->shares()->create([
            'user_id' => $user->id,
        ]);

        // Notify the post owner
        $postOwner = $post->user;
        $postOwner->notify(new PostShared($user, $post));

        return response()->json(['status' => 'success']);
    }
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Like;
use App\Notifications\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LikeController extends Controller
{
    public function like(Post $post)
    {
        $user = auth()->user();
        $post->likes()->create(['user_id' => $user->id]);
        
        \Log::info('Liking user:', [
            'id' => $user->id, 
            'name' => $user->name ?? $user->email
        ]);
        
        $post->user->notify(new PostLiked($user, $post));

        return response()->json(['success' => true]);
    }

    // ... other methods ...
}

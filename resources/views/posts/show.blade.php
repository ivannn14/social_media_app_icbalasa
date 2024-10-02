@extends('layouts.app')

@section('content')
<div class="container">
<<<<<<< HEAD
=======
<<<<<<< HEAD
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Str::limit($post->content, 50) ?? 'Untitled Post' }}</div>

                <div class="card-body">
                    <p>{{ $post->content }}</p>
                    <p class="text-muted">
                        Posted by: {{ $post->user->name ?? 'Unknown User' }}
                    </p>
                    <p class="text-muted">
                        Posted on: {{ $post->created_at ? $post->created_at->format('M d, Y') : 'Unknown Date' }}
                    </p>
                    
                    @if($post->image_path)
                        <img src="{{ asset($post->image_path) }}" alt="Post Image" class="img-fluid mt-3">
                    @endif

                    @if($post->video_path)
                        <video src="{{ asset($post->video_path) }}" controls class="w-100 mt-3"></video>
                    @endif

                    <p class="mt-3">Shares: {{ $post->shares_count }}</p>

                    @if($post->original_post_id)
                        <p>This is a shared post. Original post ID: {{ $post->original_post_id }}</p>
                    @endif
                </div>
            </div>
        </div>
=======
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
    <div class="post">
        <p>{{ $post->content }}</p>
        <small>Posted by {{ $post->user->name }} on {{ $post->created_at->format('M d, Y H:i') }}</small>
        
        <!-- Like button -->
        <form action="{{ route('posts.like', $post) }}" method="POST" class="like-form">
            @csrf
            <button type="submit" class="like-button {{ $post->likedBy(auth()->user()) ? 'liked' : '' }}">
                {{ $post->likes->count() }} {{ Str::plural('Like', $post->likes->count()) }}
            </button>
        </form>

        <!-- Comments section -->
        <!-- (Add your comments section here, similar to the dashboard view) -->
<<<<<<< HEAD
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
    </div>
</div>
@endsection

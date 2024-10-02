@extends('layouts.app')

@section('content')
<div class="container">
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
    </div>
</div>
@endsection

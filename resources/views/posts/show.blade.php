@extends('layouts.app')

@section('content')
<div class="container">
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
    </div>
</div>
@endsection

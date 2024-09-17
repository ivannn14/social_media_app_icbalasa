@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-5">My Posts</h1>

    <div class="row">
        <div class="col-md-6 mb-5">
            <div class="card shadow">
                <div class="card-header bg-primary text-center">
                    <h2 class="h4 mb-0">My Original Posts ({{ $posts->count() }})</h2>
                </div>
                <div class="card-body">
                    @if($posts->isNotEmpty())
                        @foreach($posts as $post)
                            <div class="card mb-3 post-card">
                                <div class="card-body">
                                    <p class="card-text">{{ $post->content }}</p>
                                    @if($post->image_path)
                                        <img src="{{ asset('storage/' . $post->image_path) }}" alt="Post image" class="img-fluid mb-2 rounded">
                                    @endif
                                </div>
                                <div class="card-footer text-muted">
                                    <small>Posted on {{ $post->created_at->format('M d, Y H:i') }}</small>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="alert alert-info">You haven't created any posts yet.</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-5">
            <div class="card shadow">
                <div class="card-header bg-success text-center shared-posts-header">
                    <h2 class="h4 mb-0">Shared Posts ({{ $sharedPosts->count() }})</h2>
                </div>
                <div class="card-body">
                    @if($sharedPosts->isNotEmpty())
                        @foreach($sharedPosts as $sharedPost)
                            <div class="card mb-3 post-card">
                                <div class="card-body">
                                    <p class="card-text">{{ $sharedPost->content }}</p>
                                    @if($sharedPost->image_path)
                                        <img src="{{ asset('storage/' . $sharedPost->image_path) }}" alt="Post image" class="img-fluid mb-2 rounded">
                                    @endif
                                    <p class="card-text">
                                        <small class="text-muted">Originally posted by {{ $sharedPost->user->name }} on {{ $sharedPost->created_at->format('M d, Y H:i') }}</small>
                                    </p>
                                </div>
                                <div class="card-footer text-muted">
                                    <small>Shared by you on {{ $sharedPost->pivot->created_at->format('M d, Y H:i') }}</small>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="alert alert-info">You haven't shared any posts yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .post-card {
        transition: transform 0.2s;
    }
    .post-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .shared-posts-header {
        color: black !important;
    }
    .card-header {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Your Conversations</h2>
    @if($hasConversations)
        <div class="list-group">
            @foreach($conversations as $userId => $messages)
                @php
                    $otherUser = $messages->first()->sender_id == Auth::id() ? $messages->first()->recipient : $messages->first()->sender;
                    $unreadCount = $messages->where('sender_id', $userId)->whereNull('read_at')->count();
                @endphp
                <a href="{{ route('messages.show', $userId) }}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $otherUser->name }}</h5>
                        <small>{{ $messages->first()->created_at->diffForHumans() }}</small>
                    </div>
                    <p class="mb-1">{{ Str::limit($messages->first()->content, 50) }}</p>
                    @if($unreadCount > 0)
                        <span class="badge badge-primary badge-pill">{{ $unreadCount }}</span>
                    @endif
                </a>
            @endforeach
        </div>
    @else
        <p>You don't have any conversations yet. Start a new conversation!</p>
    @endif
    <a href="{{ route('messages.create') }}" class="btn btn-primary mt-3">Start New Conversation</a>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Conversation with {{ $otherUser->name }}</h2>
    <div class="message-container">
        @foreach($messages as $message)
            <div class="message {{ $message->sender_id == Auth::id() ? 'sent' : 'received' }}">
                <p>{{ $message->content }}</p>
                <small>{{ $message->created_at->diffForHumans() }}</small>
            </div>
        @endforeach
    </div>
    <form action="{{ route('messages.store') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="recipient_id" value="{{ $otherUser->id }}">
        <div class="form-group">
            <textarea class="form-control" name="content" rows="3" placeholder="Type your message here..." required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>

<style>
    .message-container {
        max-height: 400px;
        overflow-y: auto;
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 20px;
    }
    .message {
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
    }
    .sent {
        background-color: #dcf8c6;
        text-align: right;
    }
    .received {
        background-color: #f1f0f0;
    }
</style>
@endsection

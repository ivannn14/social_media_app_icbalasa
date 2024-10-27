@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Start a New Conversation</h2>
    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="recipient_id">Select Recipient:</label>
            <select name="recipient_id" id="recipient_id" class="form-control" required>
                <option value="">Choose a user</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="content">Message:</label>
            <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>
@endsection

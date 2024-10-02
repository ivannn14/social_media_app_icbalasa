@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Friend</h2>
    <form action="{{ route('friends.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Friend's Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Send Friend Request</button>
    </form>

    <h2 class="mt-4">Your Friends</h2>
    <ul class="list-group">
        @foreach($friends as $friend)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $friend->name }}
                <form action="{{ route('friends.destroy', $friend) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                </form>
            </li>
        @endforeach
    </ul>

    <h2 class="mt-4">Pending Friend Requests (Received)</h2>
    <ul class="list-group">
        @foreach($pendingRequests as $request)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $request->name }}
                <div>
                    <form action="{{ route('friends.update', $request) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success btn-sm">Accept</button>
                    </form>
                    <form action="{{ route('friends.destroy', $request) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    <h2 class="mt-4">Sent Friend Requests</h2>
    <ul class="list-group">
        @foreach($sentRequests as $sent)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $sent->name }}
                <form action="{{ route('friends.destroy', $sent) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-warning btn-sm">Cancel Request</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection

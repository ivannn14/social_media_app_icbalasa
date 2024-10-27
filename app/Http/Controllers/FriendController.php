<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\FriendRequestReceived;

class FriendController extends Controller
{
    public function index()
    {
        $friends = auth()->user()->friends()->wherePivot('status', 'accepted')->get();
        $pendingRequests = auth()->user()->friendRequests()->wherePivot('status', 'pending')->get();
        $sentRequests = auth()->user()->friends()->wherePivot('status', 'pending')->get();
        
        return view('friends.index', compact('friends', 'pendingRequests', 'sentRequests'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $friend = User::where('email', $request->email)->first();

        if ($friend->id === auth()->id()) {
            return back()->with('error', 'You cannot add yourself as a friend.');
        }

        if (auth()->user()->friends()->where('friend_id', $friend->id)->exists()) {
            return back()->with('error', 'Friend request already sent or you are already friends.');
        }

        auth()->user()->friends()->attach($friend->id, ['status' => 'pending']);

        // Send notification to the friend
        $friend->notify(new FriendRequestReceived(auth()->user()));

        return back()->with('success', 'Friend request sent successfully!');
    }

    public function update(User $friend)
    {
        auth()->user()->friendRequests()->updateExistingPivot($friend->id, ['status' => 'accepted']);
        return back()->with('success', 'Friend request accepted!');
    }

    public function destroy(User $friend)
    {
        auth()->user()->friends()->detach($friend->id);
        auth()->user()->friendRequests()->detach($friend->id);
        return back()->with('success', 'Friend removed or request rejected.');
    }
}

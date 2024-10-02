<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
<<<<<<< HEAD
    public function getNotifications()
    {
        $user = auth()->user();
        $notifications = $user->unreadNotifications()
            ->whereIn('type', [
                'App\Notifications\PostLiked',
                'App\Notifications\FriendRequestReceived'
            ])
            ->latest()
            ->take(5)
            ->get()
            ->map(function ($notification) {
                $data = [
                    'id' => $notification->id,
                    'type' => class_basename($notification->type),
                ];

                if ($notification->type === 'App\Notifications\PostLiked') {
                    $data['user_name'] = $notification->data['liker_name'];
                    $data['post_content'] = $notification->data['post_content'];
                    $data['message'] = "{$data['user_name']} liked your post: \"{$data['post_content']}...\"";
                } elseif ($notification->type === 'App\Notifications\FriendRequestReceived') {
                    $data['user_name'] = $notification->data['sender_name'];
                    $data['message'] = $notification->data['message'];
                }

                return $data;
            });

        return response()->json($notifications);
    }

    public function markAsRead(Request $request)
    {
        auth()->user()->unreadNotifications()->where('id', $request->id)->markAsRead();
        return response()->json(['status' => 'success']);
=======
    public function index()
    {
        $notifications = auth()->user()->notifications;
        return view('notifications', compact('notifications'));
    }

    public function getNotifications()
    {
        $user = auth()->user();
        $notifications = $user->unreadNotifications;
        
        foreach ($notifications as $notification) {
            \Log::info('Notification data:', [
                'type' => $notification->type,
                'data' => $notification->data
            ]);
        }
        
        return response()->json($notifications);
    }

    public function markAsRead($id)
    {
        $notification = auth()->user()->notifications()->findOrFail($id);
        $notification->markAsRead();

        return back()->with('success', 'Notification marked as read');
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
    }
}

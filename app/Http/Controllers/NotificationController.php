<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
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
    }
}

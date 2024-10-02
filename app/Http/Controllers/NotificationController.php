<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
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
    }
}

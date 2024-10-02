<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use App\Models\User; // Assuming User model is in App\Models namespace

class PostLiked extends Notification
{
    use Queueable;

    protected $likerId;
    protected $postId;

    public function __construct($likerId, $postId)
    {
        $this->likerId = $likerId;
        $this->postId = $postId;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        $liker = User::find($this->likerId);
        return [
            'liker_name' => $liker ? $liker->name : 'A user',
            'liker_id' => $this->likerId,
            'post_id' => $this->postId,
        ];
    }
}

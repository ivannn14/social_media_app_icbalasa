<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PostLikedNotification extends Notification
{
    use Queueable;

    protected $liker;
    protected $post;

    public function __construct($liker, $post)
    {
        $this->liker = $liker;
        $this->post = $post;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'message' => $this->liker->name . ' liked your post.',
            'liker_name' => $this->liker->name,
            'liker_id' => $this->liker->id,
            'post_id' => $this->post->id,
            'post_title' => $this->post->title ?? 'Untitled post'
        ];
    }
}


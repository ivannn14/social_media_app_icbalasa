<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;

class PostCommented extends Notification
{
    use Queueable;

    protected $commenter;
    protected $post;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($commenter, $post)
    {
        $this->commenter = $commenter;
        $this->post = $post;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'message' => $this->commenter->name . ' commented on your post.',
            'post_id' => $this->post->id,
            'commenter_id' => $this->commenter->id,
        ];
    }

    /**
     * Get the broadcastable representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return BroadcastMessage
     */
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'message' => $this->commenter->name . ' commented on your post.',
            'post_id' => $this->post->id,
            'commenter_id' => $this->commenter->id,
        ]);
    }
}

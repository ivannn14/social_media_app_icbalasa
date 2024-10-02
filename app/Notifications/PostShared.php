<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;

class PostShared extends Notification
{
    use Queueable;

    protected $sharer;
    protected $post;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($sharer, $post)
    {
        $this->sharer = $sharer;
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
            'message' => $this->sharer->name . ' shared your post.',
            'post_id' => $this->post->id,
            'sharer_id' => $this->sharer->id,
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
            'message' => $this->sharer->name . ' shared your post.',
            'post_id' => $this->post->id,
            'sharer_id' => $this->sharer->id,
        ]);
    }
}

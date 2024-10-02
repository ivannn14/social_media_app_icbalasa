<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
<<<<<<< HEAD
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;
use App\Models\Post;
=======
use Illuminate\Notifications\Notification;
use App\Models\User; // Assuming User model is in App\Models namespace
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f

class PostLiked extends Notification
{
    use Queueable;

<<<<<<< HEAD
    protected $liker;
    protected $post;

    public function __construct(User $liker, Post $post)
    {
        $this->liker = $liker;
        $this->post = $post;
=======
    protected $likerId;
    protected $postId;

    public function __construct($likerId, $postId)
    {
        $this->likerId = $likerId;
        $this->postId = $postId;
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
<<<<<<< HEAD
        return [
            'liker_id' => $this->liker->id,
            'liker_name' => $this->liker->name,
            'post_id' => $this->post->id,
            'post_content' => substr($this->post->content, 0, 50),
=======
        $liker = User::find($this->likerId);
        return [
            'liker_name' => $liker ? $liker->name : 'A user',
            'liker_id' => $this->likerId,
            'post_id' => $this->postId,
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        ];
    }
}

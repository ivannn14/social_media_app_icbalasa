<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'bio',
        'profile_picture',
        'background_picture',
        // other fillable fields
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the URL of the user's profile picture.
     *
     * @return string
     */
    public function getProfilePictureUrlAttribute()
    {
        return $this->profile_picture ? asset('storage/' . $this->profile_picture) : asset('default-profile-picture.jpg');
    }

    /**
     * Get the URL of the user's background image.
     *
     * @return string
     */
    public function getBackgroundImageUrlAttribute()
    {
        return $this->background_image ? asset('storage/' . $this->background_image) : asset('default-background.jpg');
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function getNameAttribute($value)
    {
        return $value ?: 'User ' . $this->id;
    }

    public function getNameForNotification($notification)
    {
        return $notification->data['liker_name'] 
            ?? User::find($notification->data['liker_id'])->name 
            ?? 'Someone';
    }

=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function sharedPosts()
    {
<<<<<<< HEAD
        return $this->belongsToMany(Post::class, 'post_shares')->withTimestamps();
=======
<<<<<<< HEAD
        return $this->belongsToMany(Post::class, 'post_shares', 'user_id', 'post_id')->withTimestamps();
=======
        return $this->belongsToMany(Post::class, 'post_shares')
                    ->withTimestamps()
                    ->orderByPivot('created_at', 'desc');
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
    }

    public function friends()
    {
<<<<<<< HEAD
        return $this->belongsToMany(User::class, 'friendships', 'user_id', 'friend_id')
                    ->wherePivot('accepted', true);
    }
=======
<<<<<<< HEAD
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id')
                    ->withPivot('status')
                    ->withTimestamps();
    }

    public function friendRequests()
    {
        return $this->belongsToMany(User::class, 'friends', 'friend_id', 'user_id')
                    ->wherePivot('status', 'pending')
                    ->withTimestamps();
    }

    // Remove this method as it's redundant
    // public function getFullNameAttribute()
    // {
    //     return $this->first_name . ' ' . $this->last_name;
    // }
=======
        return $this->belongsToMany(User::class, 'friendships', 'user_id', 'friend_id')
                    ->wherePivot('accepted', true);
    }
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
}

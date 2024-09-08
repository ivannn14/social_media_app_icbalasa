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
        'profile_picture',  // Add this
        'background_image', // Add this
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
}

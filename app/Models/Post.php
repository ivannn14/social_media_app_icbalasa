<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public $timestamps = true;

    protected $fillable = ['title', 'content', 'user_id'];
=======
    protected $fillable = [
        'content', 'user_id', 'shares_count', 'original_post_id'
    ];
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = Str::slug($post->content . ' ' . Str::random(5));
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
<<<<<<< HEAD
        return $this->belongsToMany(User::class, 'post_likes')->withTimestamps();
=======
        return $this->hasMany(Like::class);
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
    }

    public function likedBy(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getShareUrlAttribute()
    {
        return route('posts.show', $this->slug);
    }

    public function sharedBy()
    {
        return $this->belongsToMany(User::class, 'post_shares')->withTimestamps();
    }

    public function isLikedBy(User $user)
    {
        return $this->likes()->where('user_id', $user->id)->exists();
    }

    public function originalPost()
    {
        return $this->belongsTo(Post::class, 'original_post_id');
    }

    public function shares()
    {
        return $this->hasMany(Post::class, 'original_post_id');
    }
<<<<<<< HEAD

    public function getShortTitleAttribute()
    {
        return \Str::limit($this->content, 50); // Returns first 50 characters of content
    }
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
}

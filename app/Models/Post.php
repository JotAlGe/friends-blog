<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'photo', 'user_id', 'category_id'];

    //category
    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    //comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //user
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    //likes
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function getPostPictureUrlAttribute(): string
    {
        return Storage::disk('public')->url($this->photo);
    }
}

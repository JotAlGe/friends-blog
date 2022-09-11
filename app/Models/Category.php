<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function color()
    {
        return $this->belongsTo(Color::class)->withDefault();
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

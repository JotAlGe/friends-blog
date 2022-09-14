<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    // relationship with icons
    public function icon()
    {
        return $this->belongsTo(Icon::class)->withDefault();
    }

    // with users
    public function users()
    {
        return $this->hasMany(User::class);
    }
}

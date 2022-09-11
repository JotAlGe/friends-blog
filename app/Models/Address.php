<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    // street
    public function street()
    {
        return $this->belongsTo(Street::class)->withDefault();
    }

    //users
    public function users()
    {
        return $this->hasMany(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    use HasFactory;

    // privince
    public function province()
    {
        return $this->belongsTo(Province::class)->withDefault();
    }

    // streets
    public function streets()
    {
        return $this->hasMany(Street::class);
    }
}

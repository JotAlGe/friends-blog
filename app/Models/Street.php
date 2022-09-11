<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    // locality
    public function locality()
    {
        return $this->belongsTo(Locality::class)->withDefault();
    }

    // address
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}

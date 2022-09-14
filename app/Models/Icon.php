<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    // relationship with status
    public function statuses()
    {
        return $this->hasMany(Status::class);
    }
}

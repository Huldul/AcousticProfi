<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoundEffect extends Model
{
    use HasFactory;

    public function soundTypes()
    {
        return $this->hasMany(SoundType::class);
    }
}


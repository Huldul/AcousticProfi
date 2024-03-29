<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoundType extends Model
{
    use HasFactory;

    public function soundEffect()
    {
        return $this->belongsTo(SoundEffect::class);
    }
    public function sounds()
    {
        return $this->hasMany(Sound::class);
    }
}


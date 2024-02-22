<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class IndexPage extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['head_title', 'services_title', 'sound_title', 'acoustic_title'];
}

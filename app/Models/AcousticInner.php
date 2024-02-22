<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Support\Str;
class AcousticInner extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title', 'subtitle', 'main', 'features', 'purpose'];
    public function finishes()
{
    return $this->belongsToMany(Finish::class, 'acoustic_finishes', 'acoustic_inner_id', 'finish_id');
}

    public static function boot(){
        parent::boot();

        self::creating(function($model){
            $slug = Str::slug($model->title);
            $model->slug = AcousticInner::where('slug', $slug)->exists() ? $slug.'-'.uniqid() : $slug;
        });

        self::updating(function($model){
            $slug = Str::slug($model->title);
            $model->slug = AcousticInner::where('slug', '!=', $model->slug)->where('slug', $slug)->exists() ? $slug.'-'.uniqid() : $slug;
        });
    }
}

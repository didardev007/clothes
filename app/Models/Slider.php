<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Slider extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function menuSliders (): HasMany
    {
        return $this->hasMany(MenuSliders::class);
    }
}

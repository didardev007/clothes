<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function menuGenders (): HasMany
    {
        return $this->hasMany(MenuGenders::class);
    }

    public function products (): HasMany
    {
        return $this->hasMany(Product::class);
    }
}

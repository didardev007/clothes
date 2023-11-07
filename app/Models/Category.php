<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function menuCategories (): HasMany
    {
        return $this->hasMany(MenuCategories::class);
    }

    public function products (): HasMany
    {
        return $this->hasMany(Product::class);
    }
}

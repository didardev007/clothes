<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function menuCategories (): HasMany
    {
        return $this->hasMany(MenuCategories::class);
    }

    public function menuBrands (): HasMany
    {
        return $this->hasMany(MenuBrands::class);
    }

    public function menuGenders (): HasMany
    {
        return $this->hasMany(MenuGenders::class);
    }

    public function menuSliders (): HasMany
    {
        return $this->hasMany(MenuSliders::class);
    }
}

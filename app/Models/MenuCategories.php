<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuCategories extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function menu (): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function category (): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuSliders extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function menu (): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function slider (): BelongsTo
    {
        return $this->belongsTo(Slider::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductAttributeValue extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = false;

    public function product (): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function attributeValue (): BelongsTo
    {
        return $this->belongsTo(AttributeValue::class);
    }
}

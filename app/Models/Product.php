<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function productAttributeValues (): HasMany
    {
        return $this->hasMany(ProductAttributeValue::class);
    }

    public function variants (): HasMany
    {
        return $this->hasMany(Variant::class);
    }

    public function merchant (): BelongsTo
    {
        return $this->belongsTo(Merchant::class);
    }

    public function category (): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function brand (): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function gender (): BelongsTo
    {
        return $this->belongsTo(Gender::class);
    }

    public function attributeValue (): BelongsTo
    {
        return $this->belongsTo(AttributeValue::class);
    }
}

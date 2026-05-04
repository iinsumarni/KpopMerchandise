<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'variant_id',
        'quantity',
        'is_selected'
    ];

    protected $casts = [
        'is_selected' => 'boolean'
    ];

    // relasi ke user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // relasi ke produk
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    // relasi ke variant (optional)
    public function variant(): BelongsTo
    {
        return $this->belongsTo(ProductVariant::class, 'variant_id');
    }
}
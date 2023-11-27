<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',

    ];
    public function Category(): BelongsTo
    {
        return $this->belongsTo(Categoy::class);
    }
    public function OrderItem(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
    public function CartItem(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }
}

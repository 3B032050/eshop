<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartItem extends Model
{
    use HasFactory;
    public function Product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}

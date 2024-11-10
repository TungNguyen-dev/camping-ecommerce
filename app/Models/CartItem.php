<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * CartItem Model
 *
 * Represents an individual item within a cart.
 * Each cart item is associated with a specific cart and product,
 * and includes the quantity of the product added to the cart.
 * Timestamps are recorded for creation and updates.
 *
 * @property int $id               Unique identifier for the cart item
 * @property int $cart_id          ID of the cart this item belongs to
 * @property int $product_id       ID of the product in this cart item
 * @property int $quantity         Quantity of the product in the cart
 * @property Carbon $created_at The date and time when the cart item was created
 * @property Carbon $updated_at The date and time when the cart item was last updated
 */
class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity',
    ];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}

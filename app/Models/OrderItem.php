<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * OrderItem Model
 *
 * Represents an individual item within an order.
 * Each order item is associated with a specific order and product,
 * and includes details such as quantity and price at the time of order.
 * Timestamps are recorded for creation and updates.
 *
 * @property int $id               Unique identifier for the order item
 * @property int $order_id         ID of the order this item belongs to
 * @property int $product_id       ID of the product in this order item
 * @property int $quantity         Quantity of the product in the order
 * @property float $price          Price of the product at the time of ordering
 * @property Carbon $created_at The date and time when the order item was created
 * @property Carbon $updated_at The date and time when the order item was last updated
 */
class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}

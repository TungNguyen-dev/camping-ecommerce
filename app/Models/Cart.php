<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * Cart Model
 *
 * Represents a shopping cart in the e-commerce application.
 * Each cart is associated with a user and contains multiple items.
 * Creation and update timestamps are recorded automatically.
 *
 * @property int $id               Unique identifier for the cart
 * @property int $user_id          ID of the user who owns the cart
 * @property Carbon $created_at The date and time when the cart was created
 * @property Carbon $updated_at The date and time when the cart was last updated
 */
class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }
}

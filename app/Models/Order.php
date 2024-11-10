<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * Order Model
 *
 * Represents an order placed in the e-commerce application.
 * Each order is associated with a user, contains multiple items, and has a status.
 * Creation and update timestamps are recorded automatically.
 *
 * @property int $id             Unique identifier for the order
 * @property int $user_id        ID of the user who placed the order
 * @property string $status      Current status of the order (e.g., pending, processing)
 * @property Carbon $created_at The date and time when the order was created
 * @property Carbon $updated_at The date and time when the order was last updated
 */
class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}

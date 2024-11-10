<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Product Model
 *
 * Represents a product in the e-commerce application.
 * Each product has an associated name, description, price, stock level,
 * and optional image URL. It also records creation and update timestamps.
 *
 * Properties
 * @property int $id             Unique identifier for the product
 * @property string $name        Name of the product
 * @property string $description Detailed description of the product
 * @property float $price        Price of the product
 * @property int $stock          Stock quantity available for the product
 * @property string|null $image_url URL of the product image (optional)
 * @property Carbon $created_at The date and time when the product was created
 * @property Carbon $updated_at The date and time when the product was last updated
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image_url',
    ];
}

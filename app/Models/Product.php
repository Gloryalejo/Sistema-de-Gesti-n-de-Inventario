<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['name', 'description', 'base_price', 'base_cost','category_id'];

    /**
     * Get all of the categories for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function category(): HasOne
    {
        return $this->hasMany(Category::class);
    }
}

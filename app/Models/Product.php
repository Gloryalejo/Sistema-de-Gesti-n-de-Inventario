<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Inventory;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';
    protected $fillable = ['name', 'description', 'base_price', 'base_cost','category_id'];
    protected $dates = ['deleted_at'];


    // protected static function boot()
    // {
    //     parent::boot();

    //     static::created(function ($product) {
    //         // Crear un registro de inventario al crear un nuevo producto
    //         Inventory::create([
    //             'product_id' => $product->id,
    //             'movement_type' => 'Entrada', // Por ejemplo, asume una entrada al crear un producto
    //             'movement_date' => now(),
    //         ]);
    //     });

    //     // Evento al eliminar un producto
    //     static::deleted(function ($product) {
    //         // Registrar una salida de inventario
    //         Inventory::create([
    //             'product_id' => $product->id,
    //             'movement_type' => 'Salida',
    //             'movement_date' => now(),
    //         ]);
    //     });
    // }

    public function inventory()
    {
        return $this->hasMany(Inventory::class, 'product_id', 'id');
    }

    public function quantity()
    {
        $quantity = 0;
        $entries = Inventory::where('product_id', $this->id)->get();
        //$entries = $this->inventory();
        foreach ($entries as $entry) {
            if ($entry->movement_type === 'Entrada') {
                $quantity += $entry->quantity;
            }
            if ($entry->movement_type === 'Salida') {
                $quantity -= $entry->quantity;
            }
        }
        return $quantity;
    }

    /**
     * Get all of the categories for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function category()
    {
        return $this->hasOne(Category::class, "id", "category_id");
    }

    /**
     * Get all of the comments for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function suppliers()
    {
        return $this->hasMany(ProductSupplier::class, 'product_id', 'id');
    }

    /**
     * Get all of the comments for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function suppliers()
    // {
    //     return $this->hasMany(Supplier::class, 'id', 'supplier_id');
    // }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'movement_type', 'movement_date', 'quantity'];
    protected $table = 'inventory';

    /**
     * Get the product associated with the inventory record.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function signedQuantity()
    {
        if ($this->movement_type === 'Entrada') {
            return "+" . $this->quantity;
        }
        if ($this->movement_type === 'Salida') {
            return "-" . $this->quantity;
        }
    }

    public function currentQuantity()
    {
        $quantity = 0;
        $entries = Inventory::where('product_id', $this->product_id)
                     ->where('id', '<=', $this->id)->get();
                    //->where('created_at', '<=', $this->created_at);
                   // ->whereTime('created_at', '<=', $this->created_at);
        //error_log($this->id . "----" . $entries->count());
        foreach ($entries as $entry) {
            //error_log("hola");
            //error_log($this->id . "---*****-" . $entry->quantity);
            if ($entry->movement_type === 'Entrada') {
                $quantity += $entry->quantity;
            }
            if ($entry->movement_type === 'Salida') {
                $quantity -= $entry->quantity;
            }
        }
        //error_log($this->id . "--->>>>-" . $quantity);
        return $quantity;
    }

    public function previousQuantity()
    {
        $quantity = 0;
        $entries = Inventory::where('product_id', $this->product_id)
                     ->where('id', '<', $this->id)->get();
                    //->where('created_at', '<=', $this->created_at);
                   // ->whereTime('created_at', '<=', $this->created_at);
        //error_log($this->id . "----" . $entries->count());
        foreach ($entries as $entry) {
            //error_log("hola");
            //error_log($this->id . "---*****-" . $entry->quantity);
            if ($entry->movement_type === 'Entrada') {
                $quantity += $entry->quantity;
            }
            if ($entry->movement_type === 'Salida') {
                $quantity -= $entry->quantity;
            }
        }
        //error_log($this->id . "--->>>>-" . $quantity);
        return $quantity;
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Ejemplo de creación de registros de inventario
        Inventory::create([
            'product_id' => 1,
            'movement_type' => 'entrada',
            'movement_date' => now(),
            // Otros campos según sea necesario
        ]);

        Inventory::create([
            'product_id' => 2,
            'movement_type' => 'salida',
            'movement_date' => now(),
            // Otros campos según sea necesario
        ]);

        // Puedes agregar más registros según sea necesario
    }
}

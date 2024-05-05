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
            'movement_type' => 'Entrada',
            'movement_date' => now(),
            'quantity' => 1,
            // Otros campos según sea necesario
        ]);

        Inventory::create([
            'product_id' => 1,
            'movement_type' => 'Salida',
            'movement_date' => now(),
            'quantity' => 1,
            // Otros campos según sea necesario
        ]);

        // Puedes agregar más registros según sea necesario
    }
}

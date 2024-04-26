<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductSupplier;

class ProductSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ps = new ProductSupplier();
        $ps->product_id = 1;
        $ps->supplier_id = 1;
        $ps->save();

        $ps = new ProductSupplier();
        $ps->product_id = 1;
        $ps->supplier_id = 2;
        $ps->save();

        $ps = new ProductSupplier();
        $ps->product_id = 2;
        $ps->supplier_id = 2;
        $ps->save();

        $ps = new ProductSupplier();
        $ps->product_id = 3;
        $ps->supplier_id = 1;
        $ps->save();

        $ps = new ProductSupplier();
        $ps->product_id = 4;
        $ps->supplier_id = 1;
        $ps->save();

        $ps = new ProductSupplier();
        $ps->product_id = 5;
        $ps->supplier_id = 2;
        $ps->save();

        $ps = new ProductSupplier();
        $ps->product_id = 6;
        $ps->supplier_id = 1;
        $ps->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supplier = new Supplier();
        $supplier->id = 1;
        $supplier->address = 'tecmi';
        $supplier->name = 'proveedor1';
        $supplier->phone = '123456789';
        $supplier->save();

        $supplier1 = new Supplier();
        $supplier1->id = 2;
        $supplier1->address = 'tecmi cumbres';
        $supplier1->name = 'proveedor2';
        $supplier1->phone = '987654321';
        $supplier1->save();

    }
}

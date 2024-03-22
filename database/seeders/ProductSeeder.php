<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Productos de la categoría Electrónicos
        Product::create([
            'name' => 'Smart TV Samsung 4K',
            'price' => 15999.00,
            'category_id' => 1,
            'function_id' => 1,
            'role_id' => 1,
            'inventory_id' => 1,
        ]);
    
        Product::create([
            'name' => 'Laptop Dell XPS 15',
            'price' => 31999.00,
            'category_id' => 1,
            'function_id' => 2,
            'role_id' => 2,
            'inventory_id' => 2,
        ]);
    
        // Productos de la categoría Ropa
        Product::create([
            'name' => 'Camiseta Nike Dry-Fit',
            'price' => 599.00,
            'category_id' => 2,
            'function_id' => 3,
            'role_id' => 3,
            'inventory_id' => 3,
        ]);
    
        Product::create([
            'name' => 'Jeans Levi´s 501',
            'price' => 1299.00,
            'category_id' => 2,
            'function_id' => 4,
            'role_id' => 4,
            'inventory_id' => 4,
        ]);
    
        // Productos de la categoría Hogar
        Product::create([
            'name' => 'Juego de sábanas de algodón',
            'price' => 899.00,
            'category_id' => 3,
            'function_id' => 5,
            'role_id' => 5,
            'inventory_id' => 5,
        ]);
    
        Product::create([
            'name' => 'Silla de oficina ergonómica',
            'price' => 3999.00,
            'category_id' => 3,
            'function_id' => 6,
            'role_id' => 6,
            'inventory_id' => 6,
        ]);
    
        // Productos de la categoría Cocina
        Product::create([
            'name' => 'Licuadora Oster',
            'price' => 999.00,
            'category_id' => 4,
            'function_id' => 7,
            'role_id' => 7,
            'inventory_id' => 7,
        ]);
    
        Product::create([
            'name' => 'Cafetera de cápsulas Nespresso',
            'price' => 3499.00,
            'category_id' => 4,
            'function_id' => 8,
            'role_id' => 8,
            'inventory_id' => 8,
        ]);
    
        // Productos de la categoría Deporte
        Product::create([
            'name' => 'Balón de fútbol Adidas',
            'price' => 499.00,
            'category_id' => 5,
            'function_id' => 9,
            'role_id' => 9,
            'inventory_id' => 9,
        ]);
    
        Product::create([
            'name' => 'Pesas ajustables',
            'price' => 1499.00,
            'category_id' => 5,
            'function_id' => 10,
            'role_id' => 10,
            'inventory_id' => 10,
        ]);
    
        // Productos de la categoría Belleza
        Product::create([
            'name' => 'Secadora de cabello Remington',
            'price' => 799.00,
            'category_id' => 6,
            'function_id' => 11,
            'role_id' => 11,
            'inventory_id' => 11,
        ]);
    
        Product::create([
            'name' => 'Kit de maquillaje profesional',
            'price' => 1999.00,
            'category_id' => 6,
            'function_id' => 12,
            'role_id' => 12,
            'inventory_id' => 12,
        ]);
    
        // Productos de la categoría Tecnología
        Product::create([
            'name' => 'Laptop HP Pavilion',
            'price' => 13999.00,
            'category_id' => 7,
            'function_id' => 13,
            'role_id' => 13,
            'inventory_id' => 13,
        ]);
    
        Product::create([
            'name' => 'Teléfono inteligente Xiaomi Redmi Note 11',
            'price' => 7999.00,
            'category_id' => 7,
            'function_id' => 14,
            'role_id' => 14,
            'inventory_id' => 14,
        ]);
    
        // Productos de la categoría Libros
        Product::create([
            'name' => 'El principito - Antoine de Saint-Exupéry',
            'price' => 199.00,
            'category_id' => 8,
            'function_id' => 15,
            'role_id' => 15,
            'inventory_id' => 15,
        ]);
    }
}

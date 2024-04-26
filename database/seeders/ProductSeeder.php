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
        $product = new Product();

        $product->name = 'Smart TV Samsung 4K';
        $product->category_id = 1;
        $product->description = 'Televisión inteligente con resolución 4K.';
        $product->base_price = 17999.00;
        $product->base_cost =12000.00;
        $product->supplier_id =1;

        $product->save();
    
        // Productos de la categoría Electrónicos
        // Product::create([
        //     'name' => 'Smart TV Samsung 4K',
        //     'category_id' => 1,
        //     'description' => 'Televisión inteligente con resolución 4K.',
        //     'base_price' => 17999.00,
        //     'base_cost' => 12000.00,
        
        $product1 = new Product();
        $product1->name = 'Laptop Dell XPS 15';
        $product1->category_id = 1;
        $product1->description = 'Laptop de alto rendimiento con pantalla 4K.';
        $product1->base_price = 34999.00;
        $product1->base_cost = 25000.00;
        $product1->supplier_id =1;
        $product1->save();


    
        // Product::create([
        //     'name' => 'Laptop Dell XPS 15',
        //     'category_id' => 1,
        //     'description' => 'Laptop de alto rendimiento con pantalla 4K.',
        //     'base_price' => 34999.00,
        //     'base_cost' => 25000.00,
        // ]);
    
        // Productos de la categoría Ropa


        $product2 = new Product();
        $product2->name = 'Camiseta Nike Dry-Fit';
        $product2->category_id = 2;
        $product2->description = 'Camiseta deportiva con tecnología de secado rápido.';
        $product2->base_price = 699.00;
        $product2->base_cost = 300.00;
        $product2->supplier_id =1;
        $product2->save();

        // Product::create([
        //     'name' => 'Camiseta Nike Dry-Fit',
        //     'category_id' => 2,
        //     'description' => 'Camiseta deportiva con tecnología de secado rápido.',
        //     'base_price' => 699.00,
        //     'base_cost' => 300.00,
        // ]);
    
        $product3 = new Product();
        $product3->name = 'Jeans Levi´s 501';
        $product3->category_id = 2;
        $product3->description = 'Jeans clásicos de la marca Levi´s.';
        $product3->base_price = 1499.00;
        $product3->base_cost = 800.00;
        $product3->supplier_id =2;
        $product3->save();


        // Product::create([
        //     'name' => 'Jeans Levi´s 501',
        //     'category_id' => 2,
        //     'description' => 'Jeans clásicos de la marca Levi´s.',
        //     'base_price' => 1499.00,
        //     'base_cost' => 800.00,
        // ]);

        // Productos de la categoría Hogar

        $product4 = new Product();
        $product4->name = 'Juego de sábanas de algodón';
        $product4->category_id = 3;
        $product4->description = 'Sábanas suaves y confortables de algodón.';
        $product4->base_price = 999.00;
        $product4->base_cost = 500.00;
        $product4->supplier_id =2;
        $product4->save();


        // Product::create([
        //     'name' => 'Juego de sábanas de algodón',
        //     'category_id' => 3,
        //     'description' => 'Sábanas suaves y confortables de algodón.',
        //     'base_price' => 999.00,
        //     'base_cost' => 500.00,
        // ]);
    
        $product5 = new Product();
        $product5->name = 'Silla de oficina ergonómica';
        $product5->category_id = 3;
        $product5->description = 'Silla de oficina con diseño ergonómico.';
        $product5->base_price = 4499.00;
        $product5->base_cost = 2800.00;
        $product5->supplier_id =1;
        $product5->save();


        // Product::create([
        //     'name' => 'Silla de oficina ergonómica',
        //     'category_id' => 3,
        //     'description' => 'Silla de oficina con diseño ergonómico.',
        //     'base_price' => 4499.00,
        //     'base_cost' => 2800.00,
        // ]);


        $product6 = new Product();
        $product6->name = 'Licuadora Oster';
        $product6->category_id = 4;
        $product6->description = 'Licuadora de alta potencia marca Oster.';
        $product6->base_price = 1199.00;
        $product6->base_cost = 600.00;
        $product6->supplier_id =2;
        $product6->save();

        // // Productos de la categoría Cocina
        // Product::create([
        //     'name' => 'Licuadora Oster',
        //     'category_id' => 4,
        //     'description' => 'Licuadora de alta potencia marca Oster.',
        //     'base_price' => 1199.00,
        //     'base_cost' => 600.00,
        // ]);
    
        $product7 = new Product();
        $product7->name = 'Cafetera de cápsulas Nespresso';
        $product7->category_id = 4;
        $product7->description = 'Cafetera de cápsulas para café espresso.';
        $product7->base_price = 3999.00;
        $product7->base_cost = 2800.00;
        $product7->supplier_id =1;
        $product7->save();



        // Product::create([
        //     'name' => 'Cafetera de cápsulas Nespresso',
        //     'category_id' => 4,
        //     'description' => 'Cafetera de cápsulas para café espresso.',
        //     'base_price' => 3999.00,
        //     'base_cost' => 2800.00,
        // ]);

        // Productos de la categoría Deporte
        
        $product8 = new Product();
        $product8->name = 'Balón de fútbol Adidas';
        $product8->category_id = 5;
        $product8->description = 'Balón de fútbol de alta calidad marca Adidas.';
        $product8->base_price = 599.00;
        $product8->base_cost = 250.00;
        $product8->supplier_id =2;
        $product8->save();
        
        // Product::create([
        //     'name' => 'Balón de fútbol Adidas',
        //     'category_id' => 5,
        //     'description' => 'Balón de fútbol de alta calidad marca Adidas.',
        //     'base_price' => 599.00,
        //     'base_cost' => 250.00,
        // ]);


        $product9 = new Product();
        $product9->name = 'Pesas ajustables';
        $product9->category_id = 5;
        $product9->description = 'Pesas para ejercicio ajustables en peso.';
        $product9->base_price = 1799.00;
        $product9->base_cost = 1000.00;
        $product9->supplier_id =2;
        $product9->save();
    
        // Product::create([
        //     'name' => 'Pesas ajustables',
        //     'category_id' => 5,
        //     'description' => 'Pesas para ejercicio ajustables en peso.',
        //     'base_price' => 1799.00,
        //     'base_cost' => 1000.00,
        // ]);

        // Productos de la categoría Belleza

        $product10 = new Product();
        $product10->name = 'Secadora de cabello Remington';
        $product10->category_id = 6;
        $product10->description = 'Secadora de cabello de alta potencia marca Remington.';
        $product10->base_price = 899.00;
        $product10->base_cost = 500.00;
        $product10->supplier_id =1;
        $product10->save();

        // Product::create([
        //     'name' => 'Secadora de cabello Remington',
        //     'category_id' => 6,
        //     'description' => 'Secadora de cabello de alta potencia marca Remington.',
        //     'base_price' => 899.00,
        //     'base_cost' => 500.00,
        // ]);

        $product11 = new Product();
        $product11->name = 'Kit de maquillaje profesional';
        $product11->category_id = 6;
        $product11->description = 'Kit de maquillaje con variedad de productos profesionales.';
        $product11->base_price = 2499.00;
        $product11->base_cost = 1200.00;
        $product11->supplier_id =1;
        $product11->save();
    
        // Product::create([
        //     'name' => 'Kit de maquillaje profesional',
        //     'category_id' => 6,
        //     'description' => 'Kit de maquillaje con variedad de productos profesionales.',
        //     'base_price' => 2499.00,
        //     'base_cost' => 1200.00,
        // ]);

        // Productos de la categoría Tecnología

        $product12 = new Product();
        $product12->name = 'Laptop HP Pavilion';
        $product12->category_id = 7;
        $product12->description = 'Laptop versátil para uso diario marca HP.';
        $product12->base_price = 14999.00;
        $product12->base_cost = 10000.00;
        $product12->supplier_id =2;
        $product12->save();

        // Product::create([
        //     'name' => 'Laptop HP Pavilion',
        //     'category_id' => 7,
        //     'description' => 'Laptop versátil para uso diario marca HP.',
        //     'base_price' => 14999.00,
        //     'base_cost' => 10000.00,
        // ]);
    
        $product13 = new Product();
        $product13->name = 'Teléfono inteligente Xiaomi Redmi Note 11';
        $product13->category_id = 7;
        $product13->description = 'Teléfono inteligente con excelente relación calidad-precio.';
        $product13->base_price = 8999.00;
        $product13->base_cost = 6000.00;
        $product13->supplier_id =2;
        $product13->save();

        
        // Product::create([
        //     'name' => 'Teléfono inteligente Xiaomi Redmi Note 11',
        //     'category_id' => 7,
        //     'description' => 'Teléfono inteligente con excelente relación calidad-precio.',
        //     'base_price' => 8999.00,
        //     'base_cost' => 6000.00,
        // ]);

        // Productos de la categoría Libros

        $product14 = new Product();
        $product14->name = 'El principito - Antoine de Saint-Exupéry';
        $product14->category_id = 8;
        $product14->description = 'Libro clásico de literatura infantil.';
        $product14->base_price = 249.00;
        $product14->base_cost = 100.00;
        $product14->supplier_id =1;
        $product14->save();

        // Product::create([
        //     'name' => 'El principito - Antoine de Saint-Exupéry',
        //     'category_id' => 8,
        //     'description' => 'Libro clásico de literatura infantil.',
        //     'base_price' => 249.00,
        //     'base_cost' => 100.00,
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category();
        $category->id = 1;
        $category->name = 'Electrónicos';
        $category->save();

        $category1 = new Category();
        $category1->id = 2;
        $category1->name = 'Ropa';
        $category1->save();

        $category2 = new Category();
        $category2->id = 3;
        $category2->name = 'Hogar';
        $category2->save();

        $category3 = new Category();
        $category3->id = 4;
        $category3->name = 'Cocina';
        $category3->save();

        $category4 = new Category();
        $category4->id = 5;
        $category4->name = 'Deporte';
        $category4->save();

        $category5 = new Category();
        $category5->id = 6;
        $category5->name = 'Belleza';
        $category5->save();

        $category6 = new Category();
        $category6->id = 7;
        $category6->name = 'Tecnología';
        $category6->save();

        $category7 = new Category();
        $category7->id = 8;
        $category7->name = 'Libros';
        $category7->save();
    }
}



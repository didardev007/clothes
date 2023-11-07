<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Clothes', 'name_ru' => 'Одежды'],
            ['name' => 'Shoes', 'name_ru' => 'Обувьи'],
            ['name' => 'Bags', 'name_ru' => 'Сумки'],
            ['name' => 'watches', 'name_ru' => 'Часы'],
            ['name' => 'Cosmetics', 'name_ru' => 'Косметики'],
            ['name' => 'Sport', 'name_ru' => 'Спорт'],
            ['name' => 'Underwear', 'name_ru' => 'Нижнее белье'],
        ];

        foreach ($categories as $category) {
            $obj = new Category();
            $obj->name = $category['name'];
            $obj->name_ru = $category['name_ru'];
            $obj->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    public function run(): void
    {
        $genders = [
            ['name' => 'Men', 'name_ru' => 'Мужчинам'],
            ['name' => 'Woman', 'name_ru' => 'Женщинам'],
            ['name' => 'children', 'name_ru' => 'Детям'],
        ];

        foreach ($genders as $gender) {
            $obj = new Gender();
            $obj->name = $gender['name'];
            $obj->name_ru = $gender['name_ru'];
            $obj->save();
        }
    }
}

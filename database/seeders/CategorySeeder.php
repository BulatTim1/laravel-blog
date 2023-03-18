<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::query()->create([
            'name' => 'Путешествия',
            'value' => 'travel'
        ]);

        Category::query()->create([
            'name' => 'Разработка',
            'value' => 'development'
        ]);

        Category::query()->create([
            'name' => 'Лайфхаки',
            'value' => 'lifehack'
        ]);

        Category::query()->create([
            'name' => 'Образование',
            'value' => 'education'
        ]);

        Category::query()->create([
            'name' => 'Еда',
            'value' => 'food'
        ]);
    }
}

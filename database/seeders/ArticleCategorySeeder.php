<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleCategory::query()->create([
            "article_id" => 1,
            "category_id" => 2
        ]);

        ArticleCategory::query()->create([
            "article_id" => 2,
            "category_id" => 3
        ]);

        ArticleCategory::query()->create([
            "article_id" => 3,
            "category_id" => 5
        ]);
    }
}

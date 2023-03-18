<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::query()->create([
            "title" => "Laravel 10.0!",
            "content" => "Наконец-то вышел долгожданный релиз нашего любимого фреймворка Laravel!",
            "is_published" => true,
            "views_count" => 100,
            "slug" => "laravel-10",
            "author_id" => 1
        ]);

        Article::query()->create([
            "title" => "Неопубликованная статья",
            "content" => "Данную статью видит только админ!",
            "is_published" => false,
            "views_count" => 0,
            "slug" => "unpublished-article",
            "author_id" => 2
        ]);

        Article::query()->create([
            "title" => "On English Article",
            "content" => "Article - food",
            "is_published" => true,
            "views_count" => 10000,
            "slug" => "on-english-article",
            "author_id" => 1
        ]);
    }
}

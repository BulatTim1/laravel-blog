<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => fake()->title,
            "content" => fake()->paragraph,
            "is_published" => rand(0, 1),
            "views_count" => rand(0, 100_000),
            "slug" => Str::random(32),
            "author_id" => rand(1, 2),
        ];
    }
}

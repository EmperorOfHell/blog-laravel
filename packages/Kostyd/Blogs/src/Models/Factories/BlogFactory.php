<?php

namespace Kostyd\Blogs\Models\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Kostyd\Blogs\Models\Blog;
use Kostyd\Blogs\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Blog>
 */
class BlogFactory extends Factory
{
    protected $model = Blog::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'short_desc' => $sd = fake()->paragraph(2),
            'category_id' => Category::factory(),
            'body' => $sd."\n".fake()->paragraphs(1, true)
        ];
    }
}

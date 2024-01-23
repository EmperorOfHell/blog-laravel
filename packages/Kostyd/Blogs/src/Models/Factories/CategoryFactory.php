<?php

namespace Kostyd\Blogs\Models\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Kostyd\Blogs\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\CategoryComponent>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(1),
            ];
    }
}

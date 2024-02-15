<?php

namespace Kostyd\Blogs\Models\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Kostyd\Blogs\Models\Blog;
use Kostyd\Blogs\Models\Comment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>fake()->sentence(),
            'body' => fake()->paragraph(),
            'rating' => fake()->numberBetween(int2:5),
            'likes' => fake()->numberBetween(int2:100),
            'user_id' => User::factory(),
            'post_id' => Blog::factory()
        ];
    }
}

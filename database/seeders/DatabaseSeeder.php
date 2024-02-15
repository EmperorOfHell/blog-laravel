<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Kostyd\Blogs\Models\Blog;
use Kostyd\Blogs\Models\Category;
use App\Models\User;
use Kostyd\Blogs\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $users = User::factory(5)->create();
        $categories = Category::factory(10)->create();
        foreach ($categories as $category){
          Blog::factory(5)->create([
               'category_id' => $category,
           ]);
        }

        $blogs = Blog::all();
        foreach ($blogs as $blog) {
            $commentsCount = random_int(1, 5);
            for ($i = 0; $i < $commentsCount; $i++) {
                Comment::factory()->create([
                    'user_id' => $users->random(),
                    'post_id' => $blog,
                ]);
            }
        }

    }
}

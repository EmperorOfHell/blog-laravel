<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Kostyd\Blogs\Models\Blog;
use Kostyd\Blogs\Models\Category;
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
        $category = Category::factory(10)->create();
        foreach ($category as $cat){
           Blog::factory(5)->create([
               'category_id' => $cat,
           ]);
        }

    }
}

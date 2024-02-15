<?php
// php artisan db:seed --class=\\Kostyd\\Blogs\\Database\\Seeders\\CommentSeeder
namespace Kostyd\Blogs\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Kostyd\Blogs\Models\Blog;
use Kostyd\Blogs\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
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




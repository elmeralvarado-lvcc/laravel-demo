<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Comment;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()->count(10)->create()->each(function ($post) {
            Comment::factory()->count(rand(1, 5))->create([
                'commentable_id' => $post->id,
                'commentable_type' => Post::class
            ]);
        });
    }
}

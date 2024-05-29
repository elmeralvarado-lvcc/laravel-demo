<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Video;
use App\Models\Comment;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::factory()->count(10)->create()->each(function ($post) {
            Comment::factory()->count(rand(1, 5))->create([
                'commentable_id' => $post->id,
                'commentable_type' => Video::class
            ]);
        });
    }
}

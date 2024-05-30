<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Video;
use App\Models\Tag;

class TaggableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            $tagIds = Tag::inRandomOrder()->limit(rand(1, 3))->pluck('id');
            $post->tags()->attach($tagIds);
        }

        $videos = Video::all();
        foreach ($videos as $video) {
            $tagIds = Tag::inRandomOrder()->limit(rand(1, 3))->pluck('id');
            $video->tags()->attach($tagIds);
        }
    }
}

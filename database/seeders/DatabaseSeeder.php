<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\User;
use App\Models\Image;

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

        $posts = Post::factory(10)->create();
        $users = User::factory(10)->create();

        foreach ($posts as $post) {
            $image = Image::factory()->create();
            $post->image()->save($image);
        }

        foreach ($users as $user) {
            $image = Image::factory()->create();
            $user->image()->save($image);
        }
    }
}

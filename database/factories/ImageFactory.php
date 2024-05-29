<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageableType = fake()->randomElement([Post::class, User::class]);
        $imageableId = null;

        if ($imageableType === Post::class) {
            $imageableId = Post::factory()->create()->id;
        } else {
            $imageableId = User::factory()->create()->id;
        }

        return [
            'url' => fake()->imageUrl,
            'imageable_id' => $imageableId,
            'imageable_type' => $imageableType
        ];
    }
}

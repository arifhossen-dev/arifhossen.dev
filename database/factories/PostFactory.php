<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->realText(200);
        return [
            'user_id' => 1,
            'title' => Str::title($title),
            'slug' => Str::of($title)->slug('-'),
            'body' => $this->faker->realText(500),
        ];
    }
}

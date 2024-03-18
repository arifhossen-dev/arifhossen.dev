<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = $this->faker->unique()->realText(40);
        return array(
            'user_id' => 1,
            'title' => Str::title($title),
            'slug' => Str::of($title)->slug('_'),
            'body' => $this->faker->realText(500),
        );
    }
}

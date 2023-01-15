<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
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
        $dateTime = fake()->dateTimeBetween('-20 years');

        return [
            'title' => fake()->words(asText: true),
            'body' => fake()->paragraphs(5, asText: true),
            'user_id' => User::factory(),
            'created_at' => $dateTime,
            'updated_at' => $dateTime
        ];
    }
}

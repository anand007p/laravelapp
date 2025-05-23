<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;


class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'userid' => User::inRandomOrder()->first()->id ?? User::factory(), // dynamic or fallback
            'createdate' => $this->faker->dateTimeThisYear,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'users_id'=>User::inRandomOrder()->first()->id,
            'title'=>fake()->sentence(),
            'service'=>fake()->randomElement([ 'sérigraphie', 'infographie','imprimerie','conception de site web']),
            'content'=>fake()->unique()->paragraph(),
        ];
    }
}

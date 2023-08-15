<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'from' => fake()->name(),
            'to' => fake()->name(),
            'email_from'=> fake()->safeEmail(),
            'number_from'=> fake()->phoneNumber(),
            // 'statut'=> fake()->name(),
            'object'=> fake()->title(),
            'content'=> fake()->paragraph(),
            'cause'=> fake()->name()
            
            ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annuaire>
 */
class AnnuaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->company;
        $created_at = fake()->dateTimeBetween('-1 year');

        return [            
            'name' => $name,
            'slug' => Str::slug($name),
            'mail' => fake()->unique()->safeEmail,
            'phone' =>fake()->phoneNumber,
            'adress' =>fake()->address,
            'content' =>fake()->paragraphs(asText: true),
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];
    }
}

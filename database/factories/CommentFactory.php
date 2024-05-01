<?php

namespace Database\Factories;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
            
        $created_at = fake()->dateTimeBetween('-1 year');

        
        return [
            'content'=>fake()->paragraphs(3, true),
            'user_id'=>rand(1, 10),
            'user_ip'=>fake()->ipv4,
            'subject'=>fake()->sentence,            
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];
    }
}

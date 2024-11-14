<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;
   
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'fisrt_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'address' => $this->faker->sentence(45),
            'phone' => $this->faker->phoneNumber(),
            
        ];
    }



}

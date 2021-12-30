<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name,
            'category_id'=>rand(1,4),
            'user_id'=>rand(1,5)
        ];
    }
}

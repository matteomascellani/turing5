<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SandwichFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'=>$this->faker->name,
            'origine'=>$this->faker->country,
            'peso'=>$this->faker->random_int(10),
            'prezzo'=>$this->faker->random_int(30),
        ];
    }
}

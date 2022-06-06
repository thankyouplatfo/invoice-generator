<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'city' => $this->faker->city(),
            'district' => $this->faker->realText(33),
            'science' => $this->faker->realText(25),
            'phone' => $this->faker->phoneNumber(),
            'tax_number' => $this->faker->isbn13(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
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
            "name" => $this->faker->name(1, 10),
            "sub_address" => $this->faker->realText(25),
            "city" => $this->faker->city(1, 10),
            "district" => $this->faker->realText(25),
            "science" => $this->faker->realText(25),
            "phone_number_1" => $this->faker->phoneNumber(),
            "phone_number_2" => $this->faker->phoneNumber(),
            "tax_number" => $this->faker->isbn13(),
            "user_id" => $this->faker->numberBetween(1, 10),
        ];
    }
}

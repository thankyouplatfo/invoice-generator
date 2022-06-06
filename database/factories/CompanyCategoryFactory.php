<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyCategoryFactory extends Factory
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
            'company_id'=>$this->faker->numberBetween(1,10),
            'category_id'=>$this->faker->numberBetween(1,10)
        ];
    }
}

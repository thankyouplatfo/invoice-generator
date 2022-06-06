<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyCustomerFactory extends Factory
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
            'company_id' => $this->faker->numberBetween(1,10),
            'customer_id' => $this->faker->numberBetween(1,10),
        ];
    }
}

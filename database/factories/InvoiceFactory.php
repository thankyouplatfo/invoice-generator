<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InvoiceFactory extends Factory
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
            'invoice_type' => $this->faker->realText(25),
            'quantity' => $this->faker->numberBetween(1, 255),
            //'notes' => $this->faker->numberBetween(),
            'total' => $this->faker->numberBetween(1, 255),
            'tax_value' => $this->faker->numberBetween(1, 255),
            'paid_up' => $this->faker->numberBetween(1, 255),
            'rest' => $this->faker->numberBetween(1, 255),
            'payment_type' => $this->faker->numberBetween(1, 3),
            'net_tot' => $this->faker->numberBetween(1, 255),
            'special_number' => Str::uuid(),
            'time_and_date' => $this->faker->dateTimeThisCentury('+8 years'),
            'company_id' => $this->faker->numberBetween(1,10),
            'customer_id' => $this->faker->numberBetween(1,10),

        ];
    }
}

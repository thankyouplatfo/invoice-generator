<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OfferFactory extends Factory
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
            'price' => $this->faker->numberBetween(1, 1000),
            'desc' => $this->faker->realText(255),
            'image' => $this->faker->imageUrl(600, 600, config('app.name'), null, null, false),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories;

use Flooris\Prestashop\Models\BrandPopular;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandPopularFactory extends Factory
{
    protected $model = BrandPopular::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'position'         => $this->faker->randomNumber(),
        ];
    }
}

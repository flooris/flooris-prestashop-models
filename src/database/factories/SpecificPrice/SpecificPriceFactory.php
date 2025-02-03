<?php

namespace Flooris\Prestashop\Database\Factories\SpecificPrice;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\SpecificPrice\SpecificPrice;

class SpecificPriceFactory extends Factory
{
    protected $model = SpecificPrice::class;

    public function definition(): array
    {
        return [
            'price'          => $this->faker->randomFloat(),
            'from_quantity'  => $this->faker->randomNumber(),
            'reduction'      => $this->faker->randomFloat(),
            'reduction_tax'  => $this->faker->randomNumber(),
            'reduction_type' => $this->faker->word(),
            'from'           => Carbon::now(),
            'to'             => Carbon::now(),
        ];
    }
}

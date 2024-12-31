<?php

namespace Flooris\Prestashop\Database\Factories\SpecificPrice;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\SpecificPrice\SpecificPriceRule;

class SpecificPriceRuleFactory extends Factory
{
    protected $model = SpecificPriceRule::class;

    public function definition(): array
    {
        return [
            'name'           => $this->faker->name(),
            'from_quantity'  => $this->faker->randomNumber(),
            'price'          => $this->faker->randomFloat(),
            'reduction'      => $this->faker->randomFloat(),
            'reduction_tax'  => $this->faker->boolean(),
            'reduction_type' => $this->faker->word(),
            'from'           => Carbon::now(),
            'to'             => Carbon::now(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\SpecificPrice;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\SpecificPrice\SpecificPricePriority;

class SpecificPricePriorityFactory extends Factory
{
    protected $model = SpecificPricePriority::class;

    public function definition(): array
    {
        return [
            'priority' => $this->faker->word(),
        ];
    }
}

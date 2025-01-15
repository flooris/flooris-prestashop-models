<?php

namespace Flooris\Prestashop\Database\Factories\SpecificPrice;

use Flooris\Prestashop\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\SpecificPrice\SpecificPricePriority;

class SpecificPricePriorityFactory extends Factory
{
    protected $model = SpecificPricePriority::class;

    public function definition(): array
    {
        return [
            'id_product' => Product::factory(),
            'priority'   => $this->faker->word(),
        ];
    }
}

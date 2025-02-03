<?php

namespace Flooris\Prestashop\Database\Factories\Attribute;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Attribute\AttributeImpact;

class AttributeImpactFactory extends Factory
{
    protected $model = AttributeImpact::class;

    public function definition(): array
    {
        return [
            'weight' => $this->faker->randomFloat(),
            'price'  => $this->faker->randomFloat(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Attribute;

use Flooris\Prestashop\Models\Attribute\Attribute;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttributeFactory extends Factory
{
    protected $model = Attribute::class;

    public function definition(): array
    {
        return [
            'color'            => $this->faker->word(),
            'position'         => $this->faker->randomNumber(),
            'promotion'        => $this->faker->word(),
            'display_name'     => $this->faker->name(),
            'price_unit_value' => $this->faker->randomFloat(),
            'price_unit_type'  => $this->faker->word(),
        ];
    }
}

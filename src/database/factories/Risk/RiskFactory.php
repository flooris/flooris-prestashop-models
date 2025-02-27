<?php

namespace Flooris\Prestashop\Database\Factories\Risk;

use Flooris\Prestashop\Models\Risk\Risk;
use Illuminate\Database\Eloquent\Factories\Factory;

class RiskFactory extends Factory
{
    protected $model = Risk::class;

    public function definition(): array
    {
        return [
            'percent' => $this->faker->randomNumber(),
            'color'   => $this->faker->word(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Tax;

use Flooris\Prestashop\Models\Tax\Tax;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxFactory extends Factory
{
    protected $model = Tax::class;

    public function definition(): array
    {
        return [
            'rate'    => $this->faker->randomFloat(),
            'active'  => $this->faker->boolean(),
            'deleted' => $this->faker->boolean(),
        ];
    }
}

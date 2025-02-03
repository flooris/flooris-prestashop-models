<?php

namespace Flooris\Prestashop\Database\Factories;

use Flooris\Prestashop\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class StateFactory extends Factory
{
    protected $model = State::class;

    public function definition(): array
    {
        return [
            'name'         => $this->faker->name(),
            'iso_code'     => $this->faker->word(),
            'tax_behavior' => $this->faker->randomNumber(),
            'active'       => $this->faker->boolean(),
        ];
    }
}

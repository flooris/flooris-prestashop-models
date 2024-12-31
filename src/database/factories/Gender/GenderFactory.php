<?php

namespace Flooris\Prestashop\Database\Factories\Gender;

use Flooris\Prestashop\Models\Gender\Gender;
use Illuminate\Database\Eloquent\Factories\Factory;

class GenderFactory extends Factory
{
    protected $model = Gender::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->boolean(),
        ];
    }
}

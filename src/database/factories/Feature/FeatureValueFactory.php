<?php

namespace Flooris\Prestashop\Database\Factories\Feature;

use Flooris\Prestashop\Models\Feature\FeatureValue;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeatureValueFactory extends Factory
{
    protected $model = FeatureValue::class;

    public function definition(): array
    {
        return [
            'custom' => $this->faker->boolean(),
        ];
    }
}

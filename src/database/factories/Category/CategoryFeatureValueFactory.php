<?php

namespace Flooris\Prestashop\Database\Factories\Category;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Category\CategoryFeatureValue;

class CategoryFeatureValueFactory extends Factory
{
    protected $model = CategoryFeatureValue::class;

    public function definition(): array
    {
        return [
            'position' => $this->faker->randomNumber(),
        ];
    }
}

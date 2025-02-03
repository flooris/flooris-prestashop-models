<?php

namespace Flooris\Prestashop\Database\Factories\Category;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Category\CategoryPopular;

class CategoryPopularFactory extends Factory
{
    protected $model = CategoryPopular::class;

    public function definition(): array
    {
        return [
            'position' => $this->faker->randomNumber(),
        ];
    }
}

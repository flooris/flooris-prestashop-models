<?php

namespace Flooris\Prestashop\Database\Factories\Category;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Category\CategoryProduct;

class CategoryProductFactory extends Factory
{
    protected $model = CategoryProduct::class;

    public function definition(): array
    {
        return [
            'position' => $this->faker->randomNumber(),
        ];
    }
}

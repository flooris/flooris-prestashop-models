<?php

namespace Flooris\Prestashop\Database\Factories\Category;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Category\CategoryShop;

class CategoryShopFactory extends Factory
{
    protected $model = CategoryShop::class;

    public function definition(): array
    {
        return [
            'position' => $this->faker->randomNumber(),
        ];
    }
}

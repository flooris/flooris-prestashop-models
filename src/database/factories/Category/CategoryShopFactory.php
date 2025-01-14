<?php

namespace Flooris\Prestashop\Database\Factories\Category;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Category\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Category\CategoryShop;

class CategoryShopFactory extends Factory
{
    protected $model = CategoryShop::class;

    public function definition(): array
    {
        return [
            'id_category' => Category::factory(),
            'id_shop'     => Shop::factory(),
            'position'    => $this->faker->randomNumber(),
        ];
    }
}

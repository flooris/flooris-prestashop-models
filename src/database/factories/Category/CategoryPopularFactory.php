<?php

namespace Flooris\Prestashop\Database\Factories\Category;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Category\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Category\CategoryPopular;

class CategoryPopularFactory extends Factory
{
    protected $model = CategoryPopular::class;

    public function definition(): array
    {
        return [
            'position' => $this->faker->randomNumber(),

            'id_shop'     => Shop::factory(),
            'id_category' => Category::factory(),
            'id_parent'   => Category::factory(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Category;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Category\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Category\CategoryHeader;

class CategoryHeaderFactory extends Factory
{
    protected $model = CategoryHeader::class;

    public function definition(): array
    {
        return [
            'content'  => $this->faker->word(),
            'position' => $this->faker->randomNumber(),

            'id_category' => Category::factory(),
            'id_shop'     => Shop::factory(),
        ];
    }
}

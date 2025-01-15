<?php

namespace Flooris\Prestashop\Database\Factories\Shop;

use Flooris\Prestashop\Models\Theme;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Shop\ShopGroup;
use Flooris\Prestashop\Models\Category\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    protected $model = Shop::class;

    public function definition(): array
    {
        return [
            'name'    => $this->faker->name(),
            'active'  => $this->faker->randomNumber(),
            'deleted' => $this->faker->randomNumber(),

            'id_shop_group' => ShopGroup::factory(),
            'id_category'   => Category::factory(),
            'id_theme'      => Theme::factory(),
        ];
    }
}

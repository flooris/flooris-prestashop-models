<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Product\Product;
use Flooris\Prestashop\Models\Category\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductHoofdcategorie;

class ProductHoofdcategorieFactory extends Factory
{
    protected $model = ProductHoofdcategorie::class;

    public function definition(): array
    {
        return [
            'id_product'  => Product::factory(),
            'id_shop'     => Shop::factory(),
            'id_category' => Category::factory(),
            'name'        => $this->faker->name(),
        ];
    }
}

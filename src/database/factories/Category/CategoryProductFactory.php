<?php

namespace Flooris\Prestashop\Database\Factories\Category;

use Flooris\Prestashop\Models\Product\Product;
use Flooris\Prestashop\Models\Category\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Category\CategoryProduct;

class CategoryProductFactory extends Factory
{
    protected $model = CategoryProduct::class;

    public function definition(): array
    {
        return [
            'id_category' => Category::factory(),
            'id_product'  => Product::factory(),
            'position'    => $this->faker->randomNumber(),
        ];
    }
}

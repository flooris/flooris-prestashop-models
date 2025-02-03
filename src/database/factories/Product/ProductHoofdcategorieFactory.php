<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductHoofdcategorie;

class ProductHoofdcategorieFactory extends Factory
{
    protected $model = ProductHoofdcategorie::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}

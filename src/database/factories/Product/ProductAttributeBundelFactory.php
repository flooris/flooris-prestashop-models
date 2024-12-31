<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductAttributeBundel;

class ProductAttributeBundelFactory extends Factory
{
    protected $model = ProductAttributeBundel::class;

    public function definition(): array
    {
        return [
            'aantal' => $this->faker->randomNumber(),
            'ean13'  => $this->faker->word(),
        ];
    }
}

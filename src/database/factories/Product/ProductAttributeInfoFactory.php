<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Flooris\Prestashop\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductAttribute;
use Flooris\Prestashop\Models\Product\ProductAttributeInfo;

class ProductAttributeInfoFactory extends Factory
{
    protected $model = ProductAttributeInfo::class;

    public function definition(): array
    {
        return [
            'voordeelmailsegmenthond'            => $this->faker->randomNumber(),
            'voordeelmailsegmentkat'             => $this->faker->randomNumber(),
            'voordeelmailsegmentknaagdierkonijn' => $this->faker->randomNumber(),
            'voordeelmailsegmentvogel'           => $this->faker->randomNumber(),
            'voordeelmailsegmentpaardvee'        => $this->faker->randomNumber(),
            'voordeelmailsegmentvis'             => $this->faker->randomNumber(),
            'herbesteltermijn'                   => $this->faker->randomNumber(),

            'id_product_attribute' => ProductAttribute::factory(),
            'id_product'           => Product::factory(),
        ];
    }
}

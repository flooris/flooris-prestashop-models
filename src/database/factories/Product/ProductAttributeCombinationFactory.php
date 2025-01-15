<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Flooris\Prestashop\Models\Attribute\Attribute;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductAttribute;
use Flooris\Prestashop\Models\Product\ProductAttributeCombination;

class ProductAttributeCombinationFactory extends Factory
{
    protected $model = ProductAttributeCombination::class;

    public function definition(): array
    {
        return [
            'id_attribute'         => Attribute::factory(),
            'id_product_attribute' => ProductAttribute::factory(),
        ];
    }
}

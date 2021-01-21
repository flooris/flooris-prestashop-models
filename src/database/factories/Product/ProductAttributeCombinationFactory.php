<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Flooris\Prestashop\Models\Attribute\Attribute;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductAttribute;
use Flooris\Prestashop\Models\Product\ProductAttributeCombination;

/**
 * Class ProductAttributeCombinationFactory
 *
 * @package Flooris\Prestashop\Database\Factories\Product
 */
class ProductAttributeCombinationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductAttributeCombination::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'id_attribute' => Attribute::factory(),
            'id_product_attribute' => ProductAttribute::factory(),
        ];
    }
}

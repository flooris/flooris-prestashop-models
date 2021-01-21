<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Carbon\Carbon;
use Flooris\Prestashop\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductAttribute;

/**
 * Class ProductAttributeFactory
 *
 * @package Flooris\Prestashop\Database\Factories\Product
 */
class ProductAttributeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductAttribute::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'id_product' => Product::factory(),
            'reference' => null,
            'supplier_reference' => null,
            'location' => null,
            'ean13' => null,
            'upc' => null,
            'wholesale_price' => 0.000000,
            'price' => 10.000000,
            'ecotax' => 0,
            'quantity' => 0,
            'weight' => 0,
            'unit_price_impact' => 0.00,
            'default_on' => true,
            'minimal_quantity' => 0,
            'available_date' => Carbon::now()->startOfCentury(),
            'active' => true,
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductAttribute;

class ProductAttributeFactory extends Factory
{
    protected $model = ProductAttribute::class;

    public function definition(): array
    {
        return [
            'reference'          => $this->faker->word(),
            'supplier_reference' => $this->faker->word(),
            'location'           => $this->faker->word(),
            'ean13'              => $this->faker->word(),
            'upc'                => $this->faker->word(),
            'wholesale_price'    => $this->faker->randomFloat(),
            'price'              => $this->faker->randomFloat(),
            'ecotax'             => $this->faker->randomFloat(),
            'quantity'           => $this->faker->randomNumber(),
            'weight'             => $this->faker->randomFloat(),
            'unit_price_impact'  => $this->faker->randomFloat(),
            'default_on'         => $this->faker->randomNumber(),
            'minimal_quantity'   => $this->faker->randomNumber(),
            'available_date'     => $this->faker->word(),
            'unavailable_status' => $this->faker->word(),
            'frontend_label'     => $this->faker->word(),
            'active'             => $this->faker->randomNumber(),
            'invoice_name'       => $this->faker->name(),
            'condition'          => $this->faker->word(),
            'warehouse_category' => $this->faker->word(),
            'gross_weight'       => $this->faker->randomFloat(),
            'is_bundle_in_feed'  => $this->faker->randomNumber(),
        ];
    }
}

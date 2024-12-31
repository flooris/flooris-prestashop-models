<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductSupplier;

class ProductSupplierFactory extends Factory
{
    protected $model = ProductSupplier::class;

    public function definition(): array
    {
        return [
            'product_supplier_reference' => $this->faker->word(),
            'product_supplier_price_te'  => $this->faker->randomFloat(),
        ];
    }
}

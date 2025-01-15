<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Flooris\Prestashop\Models\Product\Product;
use Flooris\Prestashop\Models\Currency\Currency;
use Flooris\Prestashop\Models\Supplier\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductSupplier;
use Flooris\Prestashop\Models\Product\ProductAttribute;

class ProductSupplierFactory extends Factory
{
    protected $model = ProductSupplier::class;

    public function definition(): array
    {
        return [
            'product_supplier_reference' => $this->faker->word(),
            'product_supplier_price_te'  => $this->faker->randomFloat(),

            'id_product'           => Product::factory(),
            'id_product_attribute' => ProductAttribute::factory(),
            'id_supplier'          => Supplier::factory(),
            'id_currency'          => Currency::factory(),
        ];
    }
}

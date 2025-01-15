<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Product\Product;
use Flooris\Prestashop\Models\Carrier\Carrier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductCarrier;

class ProductCarrierFactory extends Factory
{
    protected $model = ProductCarrier::class;

    public function definition(): array
    {
        return [
            'id_product'           => Product::factory(),
            'id_carrier_reference' => Carrier::factory(),
            'id_shop'              => Shop::factory(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Carrier;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Carrier\Carrier;
use Flooris\Prestashop\Models\Carrier\CarrierShop;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarrierShopFactory extends Factory
{
    protected $model = CarrierShop::class;

    public function definition(): array
    {
        return [
            'id_carrier' => Carrier::factory(),
            'id_shop'    => Shop::factory(),
        ];
    }
}

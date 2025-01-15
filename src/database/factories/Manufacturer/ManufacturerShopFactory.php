<?php

namespace Flooris\Prestashop\Database\Factories\Manufacturer;

use Flooris\Prestashop\Models\Shop\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Manufacturer\Manufacturer;
use Flooris\Prestashop\Models\Manufacturer\ManufacturerShop;

class ManufacturerShopFactory extends Factory
{
    protected $model = ManufacturerShop::class;

    public function definition(): array
    {
        return [
            'id_manufacturer' => Manufacturer::factory(),
            'id_shop'         => Shop::factory(),
        ];
    }
}

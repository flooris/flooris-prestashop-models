<?php

namespace Flooris\Prestashop\Database\Factories\Zone;

use Flooris\Prestashop\Models\Zone\Zone;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Zone\ZoneShop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZoneShopFactory extends Factory
{
    protected $model = ZoneShop::class;

    public function definition(): array
    {
        return [
            'id_zone' => Zone::factory(),
            'id_shop' => Shop::factory(),
        ];
    }
}

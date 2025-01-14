<?php

namespace Flooris\Prestashop\Database\Factories\Country;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Country\Country;
use Flooris\Prestashop\Models\Country\CountryShop;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryShopFactory extends Factory
{
    protected $model = CountryShop::class;

    public function definition(): array
    {
        return [
            'id_country' => Country::factory(),
            'id_shop'    => Shop::factory(),
        ];
    }
}

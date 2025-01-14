<?php

namespace Flooris\Prestashop\Database\Factories\Currency;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Currency\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Currency\CurrencyShop;

class CurrencyShopFactory extends Factory
{
    protected $model = CurrencyShop::class;

    public function definition(): array
    {
        return [
            'id_currency'     => Currency::factory(),
            'id_shop'         => Shop::factory(),
            'conversion_rate' => $this->faker->randomFloat(),
        ];
    }
}

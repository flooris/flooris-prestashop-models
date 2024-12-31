<?php

namespace Flooris\Prestashop\Database\Factories\Currency;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Currency\CurrencyShop;

class CurrencyShopFactory extends Factory
{
    protected $model = CurrencyShop::class;

    public function definition(): array
    {
        return [
            'conversion_rate' => $this->faker->randomFloat(),
        ];
    }
}

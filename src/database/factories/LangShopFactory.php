<?php

namespace Flooris\Prestashop\Database\Factories;

use Flooris\Prestashop\Models\LangShop;
use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Shop\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class LangShopFactory extends Factory
{
    protected $model = LangShop::class;

    public function definition(): array
    {
        return [
            'id_lang' => Language::factory(),
            'id_shop' => Shop::factory(),
        ];
    }
}

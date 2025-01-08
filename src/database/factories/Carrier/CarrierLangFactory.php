<?php

namespace Flooris\Prestashop\Database\Factories\Carrier;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Carrier\Carrier;
use Flooris\Prestashop\Models\Carrier\CarrierLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarrierLangFactory extends Factory
{
    protected $model = CarrierLang::class;

    public function definition(): array
    {
        return [
            'id_carrier' => Carrier::factory(),
            'id_shop'    => Shop::factory(),
            'id_lang'    => Language::factory(),
            'delay'      => $this->faker->word(),
        ];
    }
}

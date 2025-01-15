<?php

namespace Flooris\Prestashop\Database\Factories\Shop;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Shop\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Shop\ShopAlternateLanguages;

class ShopAlternateLanguagesFactory extends Factory
{
    protected $model = ShopAlternateLanguages::class;

    public function definition(): array
    {
        return [
            'id_shop'       => Shop::factory(),
            'id_lang'       => Language::factory(),
            'language_code' => $this->faker->word(),
        ];
    }
}

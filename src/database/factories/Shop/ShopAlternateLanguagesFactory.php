<?php

namespace Flooris\Prestashop\Database\Factories\Shop;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Shop\ShopAlternateLanguages;

class ShopAlternateLanguagesFactory extends Factory
{
    protected $model = ShopAlternateLanguages::class;

    public function definition(): array
    {
        return [
            'language_code' => $this->faker->word(),
        ];
    }
}

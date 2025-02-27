<?php

namespace Flooris\Prestashop\Database\Factories\Carrier;

use Flooris\Prestashop\Models\Carrier\CarrierLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarrierLangFactory extends Factory
{
    protected $model = CarrierLang::class;

    public function definition(): array
    {
        return [
            'delay' => $this->faker->word(),
        ];
    }
}

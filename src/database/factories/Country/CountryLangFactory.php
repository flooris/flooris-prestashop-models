<?php

namespace Flooris\Prestashop\Database\Factories\Country;

use Flooris\Prestashop\Models\Country\CountryLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryLangFactory extends Factory
{
    protected $model = CountryLang::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}

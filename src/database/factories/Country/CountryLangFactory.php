<?php

namespace Flooris\Prestashop\Database\Factories\Country;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Country\Country;
use Flooris\Prestashop\Models\Country\CountryLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryLangFactory extends Factory
{
    protected $model = CountryLang::class;

    public function definition(): array
    {
        return [
            'id_country' => Country::factory(),
            'id_lang'    => Language::factory(),
            'name'       => $this->faker->name(),
        ];
    }
}

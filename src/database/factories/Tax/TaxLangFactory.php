<?php

namespace Flooris\Prestashop\Database\Factories\Tax;

use Flooris\Prestashop\Models\Tax\Tax;
use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Tax\TaxLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxLangFactory extends Factory
{
    protected $model = TaxLang::class;

    public function definition(): array
    {
        return [
            'id_tax'  => Tax::factory(),
            'id_lang' => Language::factory(),
            'name'    => $this->faker->name(),
        ];
    }
}

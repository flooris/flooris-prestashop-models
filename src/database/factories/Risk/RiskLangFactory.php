<?php

namespace Flooris\Prestashop\Database\Factories\Risk;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Risk\Risk;
use Flooris\Prestashop\Models\Risk\RiskLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class RiskLangFactory extends Factory
{
    protected $model = RiskLang::class;

    public function definition(): array
    {
        return [
            'id_risk' => Risk::factory(),
            'id_lang' => Language::factory(),
            'name'    => $this->faker->name(),
        ];
    }
}

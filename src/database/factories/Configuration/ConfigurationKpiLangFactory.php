<?php

namespace Flooris\Prestashop\Database\Factories\Configuration;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Configuration\ConfigurationKpiLang;

class ConfigurationKpiLangFactory extends Factory
{
    protected $model = ConfigurationKpiLang::class;

    public function definition(): array
    {
        return [
            'value'    => $this->faker->word(),
            'date_upd' => Carbon::now(),
        ];
    }
}

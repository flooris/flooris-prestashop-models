<?php

namespace Flooris\Prestashop\Database\Factories\Configuration;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Configuration\ConfigurationKpi;
use Flooris\Prestashop\Models\Configuration\ConfigurationKpiLang;

class ConfigurationKpiLangFactory extends Factory
{
    protected $model = ConfigurationKpiLang::class;

    public function definition(): array
    {
        return [
            'id_configuration_kpi' => ConfigurationKpi::factory(),
            'id_lang'              => Language::factory(),
            'value'                => $this->faker->word(),
            'date_upd'             => Carbon::now(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Configuration;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Configuration\Configuration;
use Flooris\Prestashop\Models\Configuration\ConfigurationLang;

class ConfigurationLangFactory extends Factory
{
    protected $model = ConfigurationLang::class;

    public function definition(): array
    {
        return [
            'id_configuration' => Configuration::factory(),
            'id_lang'          => Language::factory(),
            'value'            => $this->faker->word(),
            'date_upd'         => Carbon::now(),
        ];
    }
}

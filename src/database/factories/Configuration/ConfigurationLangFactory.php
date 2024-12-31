<?php

namespace Flooris\Prestashop\Database\Factories\Configuration;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Configuration\ConfigurationLang;

class ConfigurationLangFactory extends Factory
{
    protected $model = ConfigurationLang::class;

    public function definition(): array
    {
        return [
            'value'    => $this->faker->word(),
            'date_upd' => Carbon::now(),
        ];
    }
}

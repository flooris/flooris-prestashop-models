<?php

namespace Flooris\Prestashop\Database\Factories\Configuration;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Configuration\Configuration;

class ConfigurationFactory extends Factory
{
    protected $model = Configuration::class;

    public function definition(): array
    {
        return [
            'name'     => $this->faker->name(),
            'value'    => $this->faker->word(),
            'date_add' => Carbon::now(),
            'date_upd' => Carbon::now(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Currency;

use Flooris\Prestashop\Models\Currency\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

class CurrencyFactory extends Factory
{
    protected $model = Currency::class;

    public function definition(): array
    {
        return [
            'name'            => $this->faker->name(),
            'iso_code'        => $this->faker->word(),
            'iso_code_num'    => $this->faker->word(),
            'sign'            => $this->faker->word(),
            'blank'           => $this->faker->boolean(),
            'format'          => $this->faker->boolean(),
            'decimals'        => $this->faker->boolean(),
            'conversion_rate' => $this->faker->randomFloat(),
            'deleted'         => $this->faker->boolean(),
            'active'          => $this->faker->boolean(),
        ];
    }
}

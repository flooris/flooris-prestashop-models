<?php

namespace Flooris\Prestashop\Database\Factories\Tax;

use Flooris\Prestashop\Models\Tax\TaxRule;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxRuleFactory extends Factory
{
    protected $model = TaxRule::class;

    public function definition(): array
    {
        return [
            'zipcode_from' => $this->faker->word(),
            'zipcode_to'   => $this->faker->word(),
            'behavior'     => $this->faker->randomNumber(),
            'description'  => $this->faker->text(),
        ];
    }
}

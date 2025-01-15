<?php

namespace Flooris\Prestashop\Database\Factories\Tax;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Tax\TaxRulesGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxRulesGroupFactory extends Factory
{
    protected $model = TaxRulesGroup::class;

    public function definition(): array
    {
        return [
            'name'     => $this->faker->name(),
            'active'   => $this->faker->boolean(),
            'deleted'  => $this->faker->boolean(),
            'date_add' => Carbon::now(),
            'date_upd' => Carbon::now(),
        ];
    }
}

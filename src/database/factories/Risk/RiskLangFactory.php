<?php

namespace Flooris\Prestashop\Database\Factories\Risk;

use Flooris\Prestashop\Models\Risk\RiskLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class RiskLangFactory extends Factory
{
    protected $model = RiskLang::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}

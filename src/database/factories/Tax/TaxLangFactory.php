<?php

namespace Flooris\Prestashop\Database\Factories\Tax;

use Flooris\Prestashop\Models\Tax\TaxLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxLangFactory extends Factory
{
    protected $model = TaxLang::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Feature;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Feature\FeatureValueLang;

class FeatureValueLangFactory extends Factory
{
    protected $model = FeatureValueLang::class;

    public function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }
}

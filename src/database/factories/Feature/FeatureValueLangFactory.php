<?php

namespace Flooris\Prestashop\Database\Factories\Feature;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Feature\FeatureValue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Feature\FeatureValueLang;

class FeatureValueLangFactory extends Factory
{
    protected $model = FeatureValueLang::class;

    public function definition(): array
    {
        return [
            'value' => $this->faker->word(),

            'id_lang'          => Language::factory(),
            'id_feature_value' => FeatureValue::factory(),
        ];
    }
}

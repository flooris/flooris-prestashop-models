<?php

namespace Flooris\Prestashop\Database\Factories\Feature;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Feature\Feature;
use Flooris\Prestashop\Models\Feature\FeatureLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeatureLangFactory extends Factory
{
    protected $model = FeatureLang::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),

            'id_lang'    => Language::factory(),
            'id_feature' => Feature::factory(),
        ];
    }
}

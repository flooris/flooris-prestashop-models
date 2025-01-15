<?php

namespace Flooris\Prestashop\Database\Factories\Feature;

use Flooris\Prestashop\Models\Feature\Feature;
use Flooris\Prestashop\Models\Feature\FeatureGrade;
use Flooris\Prestashop\Models\Feature\FeatureValue;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeatureGradeFactory extends Factory
{
    protected $model = FeatureGrade::class;

    public function definition(): array
    {
        return [
            'grade' => $this->faker->randomNumber(),

            'id_feature_value' => FeatureValue::factory(),
            'id_feature'       => Feature::factory(),
        ];
    }
}

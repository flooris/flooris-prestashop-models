<?php

namespace Flooris\Prestashop\Database\Factories\Feature;

use Flooris\Prestashop\Models\Feature\FeatureGrade;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeatureGradeFactory extends Factory
{
    protected $model = FeatureGrade::class;

    public function definition(): array
    {
        return [
            'grade' => $this->faker->randomNumber(),
        ];
    }
}

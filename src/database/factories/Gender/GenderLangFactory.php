<?php

namespace Flooris\Prestashop\Database\Factories\Gender;

use Flooris\Prestashop\Models\Gender\GenderLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class GenderLangFactory extends Factory
{
    protected $model = GenderLang::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}

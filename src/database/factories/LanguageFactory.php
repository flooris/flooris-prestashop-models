<?php

namespace Flooris\Prestashop\Database\Factories;

use Flooris\Prestashop\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;

class LanguageFactory extends Factory
{
    protected $model = Language::class;

    public function definition(): array
    {
        return [
            'name'             => $this->faker->name(),
            'active'           => $this->faker->boolean(),
            'iso_code'         => $this->faker->word(),
            'language_code'    => $this->faker->word(),
            'date_format_lite' => $this->faker->word(),
            'date_format_full' => $this->faker->word(),
            'is_rtl'           => $this->faker->boolean(),
        ];
    }
}

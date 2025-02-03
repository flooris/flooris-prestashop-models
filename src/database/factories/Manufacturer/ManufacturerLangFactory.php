<?php

namespace Flooris\Prestashop\Database\Factories\Manufacturer;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Manufacturer\ManufacturerLang;

class ManufacturerLangFactory extends Factory
{
    protected $model = ManufacturerLang::class;

    public function definition(): array
    {
        return [
            'description'       => $this->faker->text(),
            'short_description' => $this->faker->text(),
            'meta_title'        => $this->faker->word(),
            'meta_keywords'     => $this->faker->word(),
            'meta_description'  => $this->faker->text(),
        ];
    }
}

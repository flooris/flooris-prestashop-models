<?php

namespace Flooris\Prestashop\Database\Factories\Manufacturer;

use Flooris\Prestashop\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Manufacturer\Manufacturer;
use Flooris\Prestashop\Models\Manufacturer\ManufacturerLang;

class ManufacturerLangFactory extends Factory
{
    protected $model = ManufacturerLang::class;

    public function definition(): array
    {
        return [
            'id_manufacturer'   => Manufacturer::factory(),
            'id_lang'           => Language::factory(),
            'description'       => $this->faker->text(),
            'short_description' => $this->faker->text(),
            'meta_title'        => $this->faker->word(),
            'meta_keywords'     => $this->faker->word(),
            'meta_description'  => $this->faker->text(),
        ];
    }
}

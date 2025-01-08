<?php

namespace Flooris\Prestashop\Database\Factories\Attribute;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Attribute\Attribute;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Attribute\AttributeLang;

class AttributeLangFactory extends Factory
{
    protected $model = AttributeLang::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),

            'id_lang'      => Language::factory(),
            'id_attribute' => Attribute::factory(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Attribute;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Attribute\AttributeGroupLang;

class AttributeGroupLangFactory extends Factory
{
    protected $model = AttributeGroupLang::class;

    public function definition(): array
    {
        return [
            'name'        => $this->faker->name(),
            'public_name' => function (array $attributes) {
                return $attributes['name'];
            },
        ];
    }
}

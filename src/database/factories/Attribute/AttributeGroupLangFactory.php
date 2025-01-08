<?php

namespace Flooris\Prestashop\Database\Factories\Attribute;

use Flooris\Prestashop\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Attribute\AttributeGroup;
use Flooris\Prestashop\Models\Attribute\AttributeGroupLang;

class AttributeGroupLangFactory extends Factory
{
    protected $model = AttributeGroupLang::class;

    public function definition(): array
    {
        return [
            'id_attribute_group' => AttributeGroup::factory(),
            'id_lang'            => Language::factory(),
            'name'               => $this->faker->name(),
            'public_name'        => function (array $attributes) {
                return $attributes['name'];
            },
        ];
    }
}

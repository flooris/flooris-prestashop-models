<?php

namespace Flooris\Prestashop\Database\Factories\Attribute;

use Flooris\Prestashop\Enums\GroupTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Attribute\AttributeGroup;

class AttributeGroupFactory extends Factory
{
    protected $model = AttributeGroup::class;

    public function definition(): array
    {
        return [
            'group_type'     => $this->faker->randomElement(GroupTypeEnum::class),
            'is_color_group' => function (array $attributes) {
                return $attributes['group_type'] === GroupTypeEnum::COLOR;
            },
            'position'       => $this->faker->randomNumber(),
        ];
    }
}

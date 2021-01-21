<?php

namespace Flooris\Prestashop\Database\Factories\Attribute;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Attribute\AttributeGroup;

/**
 * Class AttributeGroupFactory
 *
 * @package Flooris\Prestashop\Database\Factories\Attribute
 */
class AttributeGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AttributeGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'group_type'     => $group_type = $this->faker->randomElement(['select', 'radio', 'color']),
            'is_color_group' => $group_type === 'color',
            'position'       => 0,
        ];
    }
}

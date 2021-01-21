<?php

namespace Flooris\Prestashop\Database\Factories\Attribute;

use Flooris\Prestashop\Models\Attribute\Attribute;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Attribute\AttributeGroup;

/**
 * Class AttributeFactory
 *
 * @package Flooris\Prestashop\Database\Factories\Attribute
 */
class AttributeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attribute::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'id_attribute_group' => AttributeGroup::factory(),
            'color'              => fn (array $attributes) => AttributeGroup::find($attributes['id_attribute_group'])->is_color_group ? $this->faker->hexcolor : '#000000',
            'position'           => 0,
        ];
    }
}

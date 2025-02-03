<?php

namespace Flooris\Prestashop\Database\Factories\Carrier;

use Flooris\Prestashop\Models\Carrier\Carrier;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarrierFactory extends Factory
{
    protected $model = Carrier::class;

    public function definition(): array
    {
        return [
            'id_reference'         => function (array $attributes) {
                return $attributes['id_carrier'];
            },
            'name'                 => $this->faker->name(),
            'url'                  => $this->faker->url(),
            'active'               => $this->faker->boolean(),
            'deleted'              => $this->faker->boolean(),
            'shipping_handling'    => $this->faker->boolean(),
            'range_behavior'       => $this->faker->boolean(),
            'is_module'            => $this->faker->boolean(),
            'is_free'              => $this->faker->boolean(),
            'shipping_external'    => $this->faker->boolean(),
            'need_range'           => $this->faker->boolean(),
            'external_module_name' => $this->faker->name(),
            'shipping_method'      => $this->faker->randomNumber(),
            'position'             => $this->faker->randomNumber(),
            'max_width'            => $this->faker->randomNumber(),
            'max_height'           => $this->faker->randomNumber(),
            'max_depth'            => $this->faker->randomNumber(),
            'max_weight'           => $this->faker->randomFloat(),
            'grade'                => $this->faker->randomNumber(),
        ];
    }
}

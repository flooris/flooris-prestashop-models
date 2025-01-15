<?php

namespace Flooris\Prestashop\Database\Factories\Image;

use Flooris\Prestashop\Models\Image\ImageType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageTypeFactory extends Factory
{
    protected $model = ImageType::class;

    public function definition(): array
    {
        return [
            'name'          => $this->faker->name(),
            'width'         => $this->faker->randomNumber(),
            'height'        => $this->faker->randomNumber(),
            'products'      => $this->faker->boolean(),
            'categories'    => $this->faker->boolean(),
            'manufacturers' => $this->faker->boolean(),
            'suppliers'     => $this->faker->boolean(),
            'scenes'        => $this->faker->boolean(),
            'stores'        => $this->faker->boolean(),
        ];
    }
}

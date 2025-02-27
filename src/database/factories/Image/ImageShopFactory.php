<?php

namespace Flooris\Prestashop\Database\Factories\Image;

use Flooris\Prestashop\Models\Image\ImageShop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageShopFactory extends Factory
{
    protected $model = ImageShop::class;

    public function definition(): array
    {
        return [
            'cover' => $this->faker->boolean(),
        ];
    }
}

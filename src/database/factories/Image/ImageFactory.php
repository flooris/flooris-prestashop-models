<?php

namespace Flooris\Prestashop\Database\Factories\Image;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Image\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition(): array
    {
        return [
            'position'    => $this->faker->randomNumber(),
            'cover'       => $this->faker->boolean(),
            'end_date'    => Carbon::now(),
            'clean_image' => $this->faker->boolean(),
        ];
    }
}

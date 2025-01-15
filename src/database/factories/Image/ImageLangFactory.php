<?php

namespace Flooris\Prestashop\Database\Factories\Image;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Image\Image;
use Flooris\Prestashop\Models\Image\ImageLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageLangFactory extends Factory
{
    protected $model = ImageLang::class;

    public function definition(): array
    {
        return [
            'id_image' => Image::factory(),
            'id_lang'  => Language::factory(),
            'legend'   => $this->faker->word(),
        ];
    }
}

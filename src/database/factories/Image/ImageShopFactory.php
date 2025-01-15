<?php

namespace Flooris\Prestashop\Database\Factories\Image;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Image\Image;
use Flooris\Prestashop\Models\Image\ImageShop;
use Flooris\Prestashop\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageShopFactory extends Factory
{
    protected $model = ImageShop::class;

    public function definition(): array
    {
        return [
            'cover' => $this->faker->boolean(),

            'id_image'   => Image::factory(),
            'id_shop'    => Shop::factory(),
            'id_product' => Product::factory(),
        ];
    }
}

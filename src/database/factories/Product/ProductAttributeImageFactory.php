<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Flooris\Prestashop\Models\Image\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductAttribute;
use Flooris\Prestashop\Models\Product\ProductAttributeImage;

class ProductAttributeImageFactory extends Factory
{
    protected $model = ProductAttributeImage::class;

    public function definition(): array
    {
        return [
            'id_product_attribute' => ProductAttribute::factory(),
            'id_image'             => Image::factory(),
        ];
    }
}

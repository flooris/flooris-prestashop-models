<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Flooris\Prestashop\Models\Tag\Tag;
use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Product\Product;
use Flooris\Prestashop\Models\Product\ProductTag;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductTagFactory extends Factory
{
    protected $model = ProductTag::class;

    public function definition(): array
    {
        return [
            'id_product' => Product::factory(),
            'id_tag'     => Tag::factory(),
            'id_lang'    => Language::factory(),
        ];
    }
}

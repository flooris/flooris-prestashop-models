<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Product\Product;
use Flooris\Prestashop\Models\Product\ProductLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductLangFactory extends Factory
{
    protected $model = ProductLang::class;

    public function definition(): array
    {
        return [
            'description'       => $this->faker->text(),
            'description_short' => $this->faker->text(),
            'link_rewrite'      => $this->faker->word(),
            'meta_description'  => $this->faker->text(),
            'meta_keywords'     => $this->faker->word(),
            'meta_title'        => $this->faker->word(),
            'name'              => $this->faker->name(),
            'available_now'     => $this->faker->word(),
            'available_later'   => $this->faker->word(),

            'id_shop'    => Shop::factory(),
            'id_lang'    => Language::factory(),
            'id_product' => Product::factory(),
        ];
    }
}

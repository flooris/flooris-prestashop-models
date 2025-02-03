<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Flooris\Prestashop\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'on_sale'                   => $this->faker->randomNumber(),
            'online_only'               => $this->faker->randomNumber(),
            'ean13'                     => $this->faker->word(),
            'upc'                       => $this->faker->word(),
            'ecotax'                    => $this->faker->randomFloat(),
            'quantity'                  => $this->faker->randomNumber(),
            'minimal_quantity'          => $this->faker->randomNumber(),
            'price'                     => $this->faker->randomFloat(),
            'wholesale_price'           => $this->faker->randomFloat(),
            'unity'                     => $this->faker->word(),
            'unit_price_ratio'          => $this->faker->randomFloat(),
            'additional_shipping_cost'  => $this->faker->randomFloat(),
            'reference'                 => $this->faker->word(),
            'supplier_reference'        => $this->faker->word(),
            'location'                  => $this->faker->word(),
            'width'                     => $this->faker->randomFloat(),
            'height'                    => $this->faker->randomFloat(),
            'depth'                     => $this->faker->randomFloat(),
            'weight'                    => $this->faker->randomFloat(),
            'out_of_stock'              => $this->faker->randomNumber(),
            'quantity_discount'         => $this->faker->randomNumber(),
            'customizable'              => $this->faker->randomNumber(),
            'uploadable_files'          => $this->faker->randomNumber(),
            'text_fields'               => $this->faker->text(),
            'active'                    => $this->faker->randomNumber(),
            'redirect_type'             => $this->faker->word(),
            'id_product_redirected'     => 0,
            'available_for_order'       => $this->faker->randomNumber(),
            'available_date'            => $this->faker->word(),
            'condition'                 => $this->faker->word(),
            'show_price'                => $this->faker->randomNumber(),
            'indexed'                   => $this->faker->randomNumber(),
            'visibility'                => $this->faker->word(),
            'cache_is_pack'             => $this->faker->randomNumber(),
            'cache_has_attachments'     => $this->faker->randomNumber(),
            'is_virtual'                => $this->faker->randomNumber(),
            'cache_default_attribute'   => $this->faker->randomNumber(),
            'date_add'                  => $this->faker->word(),
            'date_upd'                  => $this->faker->word(),
            'advanced_stock_management' => $this->faker->randomNumber(),
            'name_invoice'              => $this->faker->name(),
            'store_location'            => $this->faker->randomNumber(),
            'pack_stock_type'           => $this->faker->randomNumber(),
            'hs_code'                   => $this->faker->word(),
            'origin_country'            => $this->faker->country(),
            'review_priority'           => $this->faker->randomNumber(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Flooris\Prestashop\Models\Product\ProductShop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Enums\ProductShopConditionEnum;
use Flooris\Prestashop\Enums\ProductShopRedirectTypeEnum;
use Flooris\Prestashop\Enums\SpecificPriceRuleReductionTypeEnum;

class ProductShopFactory extends Factory
{
    protected $model = ProductShop::class;

    public function definition(): array
    {
        return [
            'on_sale'                   => $this->faker->randomNumber(),
            'online_only'               => $this->faker->randomNumber(),
            'ecotax'                    => $this->faker->randomFloat(),
            'minimal_quantity'          => $this->faker->randomNumber(),
            'price'                     => $this->faker->randomFloat(),
            'wholesale_price'           => $this->faker->randomFloat(),
            'unity'                     => $this->faker->word(),
            'unit_price_ratio'          => $this->faker->randomFloat(),
            'additional_shipping_cost'  => $this->faker->randomFloat(),
            'customizable'              => $this->faker->randomNumber(),
            'uploadable_files'          => $this->faker->randomNumber(),
            'text_fields'               => $this->faker->text(),
            'active'                    => $this->faker->randomNumber(),
            'redirect_type'             => $this->faker->randomElement(ProductShopRedirectTypeEnum::class),
            'id_product_redirected'     => $this->faker->randomNumber(),
            'available_for_order'       => $this->faker->randomNumber(),
            'available_date'            => $this->faker->word(),
            'condition'                 => $this->faker->randomElement(ProductShopConditionEnum::class),
            'show_price'                => $this->faker->randomNumber(),
            'indexed'                   => $this->faker->randomNumber(),
            'visibility'                => $this->faker->randomElement(SpecificPriceRuleReductionTypeEnum::class),
            'cache_default_attribute'   => $this->faker->randomNumber(),
            'advanced_stock_management' => $this->faker->randomNumber(),
            'date_add'                  => $this->faker->word(),
            'date_upd'                  => $this->faker->word(),
            'pack_stock_type'           => $this->faker->randomNumber(),
        ];
    }
}

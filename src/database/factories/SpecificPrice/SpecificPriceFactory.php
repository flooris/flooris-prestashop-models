<?php

namespace Flooris\Prestashop\Database\Factories\SpecificPrice;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Cart\Cart;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Group\Group;
use Flooris\Prestashop\Models\Shop\ShopGroup;
use Flooris\Prestashop\Models\Country\Country;
use Flooris\Prestashop\Models\Product\Product;
use Flooris\Prestashop\Models\Currency\Currency;
use Flooris\Prestashop\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductAttribute;
use Flooris\Prestashop\Models\SpecificPrice\SpecificPrice;
use Flooris\Prestashop\Models\SpecificPrice\SpecificPriceRule;

class SpecificPriceFactory extends Factory
{
    protected $model = SpecificPrice::class;

    public function definition(): array
    {
        return [
            'price'          => $this->faker->randomFloat(),
            'from_quantity'  => $this->faker->randomNumber(),
            'reduction'      => $this->faker->randomFloat(),
            'reduction_tax'  => $this->faker->randomNumber(),
            'reduction_type' => $this->faker->word(),
            'from'           => Carbon::now(),
            'to'             => Carbon::now(),

            'id_specific_price_rule' => SpecificPriceRule::factory(),
            'id_cart'                => Cart::factory(),
            'id_product'             => Product::factory(),
            'id_shop'                => Shop::factory(),
            'id_shop_group'          => ShopGroup::factory(),
            'id_currency'            => Currency::factory(),
            'id_country'             => Country::factory(),
            'id_group'               => Group::factory(),
            'id_customer'            => Customer::factory(),
            'id_product_attribute'   => ProductAttribute::factory(),
        ];
    }
}

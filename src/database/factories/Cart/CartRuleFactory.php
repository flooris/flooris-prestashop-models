<?php

namespace Flooris\Prestashop\Database\Factories\Cart;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Cart\CartRule;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartRuleFactory extends Factory
{
    protected $model = CartRule::class;

    public function definition(): array
    {
        return [
            'date_from'               => Carbon::now(),
            'date_to'                 => Carbon::now(),
            'description'             => $this->faker->text(),
            'quantity'                => $this->faker->randomNumber(),
            'quantity_per_user'       => $this->faker->randomNumber(),
            'priority'                => $this->faker->randomNumber(),
            'partial_use'             => $this->faker->boolean(),
            'code'                    => $this->faker->word(),
            'minimum_amount'          => $this->faker->randomFloat(),
            'minimum_amount_tax'      => $this->faker->boolean(),
            'minimum_amount_currency' => $this->faker->randomNumber(),
            'minimum_amount_shipping' => $this->faker->boolean(),
            'country_restriction'     => $this->faker->boolean(),
            'carrier_restriction'     => $this->faker->boolean(),
            'group_restriction'       => $this->faker->boolean(),
            'cart_rule_restriction'   => $this->faker->boolean(),
            'product_restriction'     => $this->faker->boolean(),
            'shop_restriction'        => $this->faker->boolean(),
            'free_shipping'           => $this->faker->boolean(),
            'reduction_percent'       => $this->faker->randomFloat(),
            'reduction_amount'        => $this->faker->randomFloat(),
            'reduction_tax'           => $this->faker->boolean(),
            'reduction_currency'      => $this->faker->randomNumber(),
            'reduction_product'       => $this->faker->randomNumber(),
            'gift_product'            => $this->faker->randomNumber(),
            'gift_product_attribute'  => $this->faker->randomNumber(),
            'highlight'               => $this->faker->boolean(),
            'active'                  => $this->faker->boolean(),
            'date_add'                => Carbon::now(),
            'date_upd'                => Carbon::now(),
        ];
    }
}

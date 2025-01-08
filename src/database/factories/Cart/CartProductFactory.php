<?php

namespace Flooris\Prestashop\Database\Factories\Cart;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Address;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Cart\Cart;
use Flooris\Prestashop\Models\Product\Product;
use Flooris\Prestashop\Models\Cart\CartProduct;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductAttribute;

class CartProductFactory extends Factory
{
    protected $model = CartProduct::class;

    public function definition(): array
    {
        return [
            'quantity' => $this->faker->randomNumber(),
            'date_add' => Carbon::now(),

            'id_address_delivery'  => Address::factory(),
            'id_cart'              => Cart::factory(),
            'id_product'           => Product::factory(),
            'id_shop'              => Shop::factory(),
            'id_product_attribute' => ProductAttribute::factory(),
        ];
    }
}

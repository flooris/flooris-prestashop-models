<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Carbon\Carbon;
use Flooris\Prestashop\Models\Address;
use Flooris\Prestashop\Models\Customer;
use Flooris\Prestashop\Models\Order\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class OrderFactory
 *
 * @package Flooris\Prestashop\Database\Factories\Order
 */
class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'reference'                => $this->faker->numerify('########'),
            'id_shop_group'            => 1,
            'id_shop'                  => 4,
            'id_carrier'               => 34,
            'id_lang'                  => 7,
            'id_customer'              => Customer::factory(),
            'id_cart'                  => $this->faker->numberBetween(0, 9999999),
            'id_order_docdata'         => $this->faker->numerify('#####-######'),
            'id_currency'              => 2,
            'id_address_delivery'      => fn (array $attributes) => Address::factory()->create(['id_customer' => $attributes['id_customer']])->id_address,
            'id_address_invoice'       => fn (array $attributes) => $this->faker->boolean(80) ? $attributes['id_address_delivery'] : Address::factory()->create(['id_customer' => $attributes['id_customer']])->id_address,
            'current_state'            => 3,
            'secure_key'               => md5($this->faker->text),
            'payment'                  => $this->faker->randomElement(config('prestashop.seeder.payment_methods')),
            'conversion_rate'          => 1,
            'module'                   => 'docdatapayments',
            'recyclable'               => 0,
            'gift'                     => 0,
            'gift_message'             => '',
            'mobile_theme'             => 0,
            'shipping_number'          => 0,
            'total_discounts'          => 0,
            'total_discounts_tax_incl' => 0,
            'total_discounts_tax_excl' => 0,
            'total_paid'               => $total_paid = $this->faker->randomFloat(2, 15, 120),
            'total_paid_tax_incl'      => $total_paid,
            'total_paid_tax_excl'      => $total_paid / 1.21,
            'total_paid_real'          => $total_paid,
            'total_shipping'           => $total_shipping = $total_paid <= 25 ? 2.95 : 0.00,
            'total_shipping_tax_incl'  => $total_shipping,
            'total_shipping_tax_excl'  => $total_shipping,
            'total_products'           => $total_products = $total_paid - $total_shipping,
            'total_products_wt'        => $total_products * 1.21,
            'carrier_tax_rate'         => 21,
            'total_wrapping'           => 0,
            'total_wrapping_tax_incl'  => 0,
            'total_wrapping_tax_excl'  => 0,
            'invoice_number'           => 0, // Invoice
            'delivery_number'          => 0,
            'invoice_date'             => Carbon::now(),
            'delivery_date'            => date('Y-m-d H:i:s', 0),
            'valid'                    => 1,
            'date_add'                 => Carbon::now(),
            'date_upd'                 => Carbon::now(),
        ];
    }
}

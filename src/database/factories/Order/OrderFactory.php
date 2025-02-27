<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Flooris\Prestashop\Models\Order\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'reference'                => $this->faker->word(),
            'id_order_docdata'         => $this->faker->word(),
            'current_state'            => $this->faker->randomNumber(),
            'secure_key'               => $this->faker->word(),
            'payment'                  => $this->faker->word(),
            'conversion_rate'          => $this->faker->randomFloat(),
            'module'                   => $this->faker->word(),
            'recyclable'               => $this->faker->boolean(),
            'gift'                     => $this->faker->boolean(),
            'gift_message'             => $this->faker->word(),
            'mobile_theme'             => $this->faker->boolean(),
            'shipping_number'          => $this->faker->word(),
            'total_discounts'          => $this->faker->randomFloat(),
            'total_discounts_tax_incl' => $this->faker->randomFloat(),
            'total_discounts_tax_excl' => $this->faker->randomFloat(),
            'total_paid'               => $this->faker->randomFloat(),
            'total_paid_tax_incl'      => $this->faker->randomFloat(),
            'total_paid_tax_excl'      => $this->faker->randomFloat(),
            'total_paid_real'          => $this->faker->randomFloat(),
            'total_products'           => $this->faker->randomFloat(),
            'total_products_wt'        => $this->faker->randomFloat(),
            'total_shipping'           => $this->faker->randomFloat(),
            'total_shipping_tax_incl'  => $this->faker->randomFloat(),
            'total_shipping_tax_excl'  => $this->faker->randomFloat(),
            'carrier_tax_rate'         => $this->faker->randomFloat(),
            'total_wrapping'           => $this->faker->randomFloat(),
            'total_wrapping_tax_incl'  => $this->faker->randomFloat(),
            'total_wrapping_tax_excl'  => $this->faker->randomFloat(),
            'round_mode'               => $this->faker->randomNumber(),
            'round_type'               => $this->faker->randomNumber(),
            'invoice_number'           => $this->faker->randomNumber(),
            'delivery_number'          => $this->faker->randomNumber(),
            'invoice_date'             => $this->faker->dateTime(),
            'delivery_date'            => $this->faker->dateTime(),
            'valid'                    => $this->faker->boolean(),
            'ga_client_id'             => $this->faker->word(),
            'ga_session_id'            => $this->faker->word(),
            'date_add'                 => $this->faker->dateTime(),
            'date_upd'                 => $this->faker->dateTime(),
            'order_message_type'       => $this->faker->word(),
            'order_message_value'      => $this->faker->word(),
        ];
    }
}

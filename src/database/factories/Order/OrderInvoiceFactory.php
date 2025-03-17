<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Flooris\Prestashop\Models\Order\OrderInvoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderInvoiceFactory extends Factory
{
    protected $model = OrderInvoice::class;

    public function definition(): array
    {
        return [
            'number'                          => $this->faker->randomNumber(),
            'delivery_number'                 => $this->faker->randomNumber(),
            'delivery_date'                   => $this->faker->word(),
            'total_discount_tax_excl'         => $this->faker->randomFloat(),
            'total_discount_tax_incl'         => $this->faker->randomFloat(),
            'total_paid_tax_excl'             => $this->faker->randomFloat(),
            'total_paid_tax_incl'             => $this->faker->randomFloat(),
            'total_products'                  => $this->faker->randomFloat(),
            'total_products_wt'               => $this->faker->randomFloat(),
            'total_shipping_tax_excl'         => $this->faker->randomFloat(),
            'total_shipping_tax_incl'         => $this->faker->randomFloat(),
            'shipping_tax_computation_method' => $this->faker->randomNumber(),
            'total_wrapping_tax_excl'         => $this->faker->randomFloat(),
            'total_wrapping_tax_incl'         => $this->faker->randomFloat(),
            'shop_address'                    => $this->faker->address(),
            'invoice_address'                 => $this->faker->address(),
            'delivery_address'                => $this->faker->address(),
            'company_address'                 => $this->faker->address(),
            'note'                            => $this->faker->word(),
            'date_add'                        => $this->faker->dateTime(),
        ];
    }
}

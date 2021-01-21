<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Carbon\Carbon;
use Flooris\Prestashop\Models\Order\Order;
use Flooris\Prestashop\Models\Order\OrderInvoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class OrderInvoiceFactory
 *
 * @package Flooris\Prestashop\Database\Factories\Order
 */
class OrderInvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderInvoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'id_order' => Order::factory(),
            'number' => $this->faker->randomNumber(4),
            'delivery_number' => 0,
            'delivery_date' => null,
            'total_discount_tax_incl' => 0,
            'total_discount_tax_excl' => 0,
            'total_paid_tax_incl' => $total_paid = $this->faker->randomFloat(2, 15, 120),
            'total_paid_tax_excl' => $total_paid / 1.21,
            'total_shipping_tax_incl' => $total_shipping = $total_paid <= 25 ? 2.95 : 0.00,
            'total_shipping_tax_excl' => $total_shipping,
            'total_products' => $total_products = $total_paid - $total_shipping,
            'total_products_wt' => $total_products * 1.21,
            'shipping_tax_computation_method' => 0,
            'total_wrapping_tax_incl' => 0,
            'total_wrapping_tax_excl' => 0,
            'note' => '',
            'date_add' => Carbon::now(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Order\Order;
use Flooris\Prestashop\Models\Carrier\Carrier;
use Flooris\Prestashop\Models\Order\OrderCarrier;
use Flooris\Prestashop\Models\Order\OrderInvoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderCarrierFactory extends Factory
{
    protected $model = OrderCarrier::class;

    public function definition(): array
    {
        return [
            'id_order'               => Order::factory(),
            'id_carrier'             => Carrier::factory(),
            'id_order_invoice'       => OrderInvoice::factory(),
            'weight'                 => $this->faker->randomFloat(),
            'shipping_cost_tax_excl' => $this->faker->randomFloat(),
            'shipping_cost_tax_incl' => $this->faker->randomFloat(),
            'tracking_number'        => $this->faker->word(),
            'date_add'               => Carbon::now(),
        ];
    }
}

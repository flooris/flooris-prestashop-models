<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Flooris\Prestashop\Models\Order\OrderInvoice;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Order\OrderInvoiceTax;

class OrderInvoiceTaxFactory extends Factory
{
    protected $model = OrderInvoiceTax::class;

    public function definition(): array
    {
        return [
            'id_order_invoice' => OrderInvoice::factory(),
            'type'             => $this->faker->word(),
            'id_tax'           => $this->faker->randomNumber(),
            'amount'           => $this->faker->randomFloat(),
        ];
    }
}

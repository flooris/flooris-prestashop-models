<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Flooris\Prestashop\Models\Order\Order;
use Flooris\Prestashop\Models\Order\OrderInvoice;
use Flooris\Prestashop\Models\Order\OrderPayment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Order\OrderInvoicePayment;

class OrderInvoicePaymentFactory extends Factory
{
    protected $model = OrderInvoicePayment::class;

    public function definition(): array
    {
        return [
            'id_order_invoice' => OrderInvoice::factory(),
            'id_order_payment' => OrderPayment::factory(),
            'id_order'         => Order::factory(),
        ];
    }
}

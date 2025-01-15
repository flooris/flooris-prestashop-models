<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Flooris\Prestashop\Models\Tax\Tax;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Order\OrderSlipDetail;
use Flooris\Prestashop\Models\Order\OrderSlipDetailTax;

class OrderSlipDetailTaxFactory extends Factory
{
    protected $model = OrderSlipDetailTax::class;

    public function definition(): array
    {
        return [
            'unit_amount'  => $this->faker->randomFloat(),
            'total_amount' => $this->faker->randomFloat(),

            'id_order_slip_detail' => OrderSlipDetail::factory(),
            'id_tax'               => Tax::factory(),
        ];
    }
}

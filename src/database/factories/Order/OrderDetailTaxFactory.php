<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Flooris\Prestashop\Models\Tax\Tax;
use Flooris\Prestashop\Models\Order\OrderDetail;
use Flooris\Prestashop\Models\Order\OrderDetailTax;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailTaxFactory extends Factory
{
    protected $model = OrderDetailTax::class;

    public function definition(): array
    {
        return [
            'id_order_detail' => OrderDetail::factory(),
            'id_tax'          => Tax::factory(),
            'unit_amount'     => $this->faker->randomFloat(),
            'total_amount'    => $this->faker->randomFloat(),
        ];
    }
}

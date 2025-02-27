<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Order\OrderSlipDetailTax;

class OrderSlipDetailTaxFactory extends Factory
{
    protected $model = OrderSlipDetailTax::class;

    public function definition(): array
    {
        return [
            'unit_amount'  => $this->faker->randomFloat(),
            'total_amount' => $this->faker->randomFloat(),
        ];
    }
}

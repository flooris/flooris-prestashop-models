<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Flooris\Prestashop\Models\Order\OrderDetailTax;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailTaxFactory extends Factory
{
    protected $model = OrderDetailTax::class;

    public function definition(): array
    {
        return [
            'unit_amount'  => $this->faker->randomFloat(),
            'total_amount' => $this->faker->randomFloat(),
        ];
    }
}

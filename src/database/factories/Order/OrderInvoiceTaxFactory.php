<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Order\OrderInvoiceTax;

class OrderInvoiceTaxFactory extends Factory
{
    protected $model = OrderInvoiceTax::class;

    public function definition(): array
    {
        return [
            'type'   => $this->faker->word(),
            'id_tax' => $this->faker->randomNumber(),
            'amount' => $this->faker->randomFloat(),
        ];
    }
}

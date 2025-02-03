<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Order\OrderSlipDetail;

class OrderSlipDetailFactory extends Factory
{
    protected $model = OrderSlipDetail::class;

    public function definition(): array
    {
        return [
            'product_quantity'     => $this->faker->randomNumber(),
            'unit_price_tax_excl'  => $this->faker->randomFloat(),
            'unit_price_tax_incl'  => $this->faker->randomFloat(),
            'total_price_tax_excl' => $this->faker->randomFloat(),
            'total_price_tax_incl' => $this->faker->randomFloat(),
            'amount_tax_excl'      => $this->faker->randomFloat(),
            'amount_tax_incl'      => $this->faker->randomFloat(),
        ];
    }
}

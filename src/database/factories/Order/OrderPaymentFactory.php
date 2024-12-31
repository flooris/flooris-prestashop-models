<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Order\OrderPayment;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderPaymentFactory extends Factory
{
    protected $model = OrderPayment::class;

    public function definition(): array
    {
        return [
            'order_reference' => $this->faker->word(),
            'amount'          => $this->faker->randomFloat(),
            'payment_method'  => $this->faker->word(),
            'conversion_rate' => $this->faker->randomFloat(),
            'transaction_id'  => $this->faker->word(),
            'card_number'     => $this->faker->word(),
            'card_brand'      => $this->faker->word(),
            'card_expiration' => $this->faker->word(),
            'card_holder'     => $this->faker->word(),
            'date_add'        => Carbon::now(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Order\Order;
use Flooris\Prestashop\Models\Order\OrderReturn;
use Flooris\Prestashop\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderReturnFactory extends Factory
{
    protected $model = OrderReturn::class;

    public function definition(): array
    {
        return [
            'id_customer' => Customer::factory(),
            'id_order'    => Order::factory(),
            'state'       => $this->faker->boolean(),
            'question'    => $this->faker->word(),
            'date_add'    => Carbon::now(),
            'date_upd'    => Carbon::now(),
        ];
    }
}

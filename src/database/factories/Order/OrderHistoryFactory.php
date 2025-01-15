<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Order\Order;
use Flooris\Prestashop\Models\Order\OrderState;
use Flooris\Prestashop\Models\Employee\Employee;
use Flooris\Prestashop\Models\Order\OrderHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderHistoryFactory extends Factory
{
    protected $model = OrderHistory::class;

    public function definition(): array
    {
        return [
            'id_employee'    => Employee::factory(),
            'id_order'       => Order::factory(),
            'id_order_state' => OrderState::factory(),
            'date_add'       => Carbon::now(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Order\OrderHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderHistoryFactory extends Factory
{
    protected $model = OrderHistory::class;

    public function definition(): array
    {
        return [
            'date_add' => Carbon::now(),
        ];
    }
}

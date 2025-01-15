<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Delay\Delay;
use Flooris\Prestashop\Models\Order\OrderDelay;
use Flooris\Prestashop\Models\Order\OrderDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDelayFactory extends Factory
{
    protected $model = OrderDelay::class;

    public function definition(): array
    {
        return [
            'id_order_detail' => OrderDetail::factory(),
            'id_delay'        => Delay::factory(),
            'date_add'        => Carbon::now(),
        ];
    }
}

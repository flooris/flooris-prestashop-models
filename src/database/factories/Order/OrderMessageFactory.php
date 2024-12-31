<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Order\OrderMessage;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderMessageFactory extends Factory
{
    protected $model = OrderMessage::class;

    public function definition(): array
    {
        return [
            'date_add' => Carbon::now(),
        ];
    }
}

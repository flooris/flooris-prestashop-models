<?php

namespace Flooris\Prestashop\Database\Factories\Customer;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Enums\OrderShipmentStatusEnum;
use Flooris\Prestashop\Models\Customer\CustomerThread;

class CustomerThreadFactory extends Factory
{
    protected $model = CustomerThread::class;

    public function definition(): array
    {
        return [
            'status'   => $this->faker->randomElement(OrderShipmentStatusEnum::class),
            'email'    => $this->faker->unique()->safeEmail(),
            'token'    => Str::random(10),
            'date_add' => Carbon::now(),
            'date_upd' => Carbon::now(),
        ];
    }
}

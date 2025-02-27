<?php

namespace Flooris\Prestashop\Database\Factories\Customer;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Customer\CustomerMessage;

class CustomerMessageFactory extends Factory
{
    protected $model = CustomerMessage::class;

    public function definition(): array
    {
        return [
            'message'    => $this->faker->word(),
            'file_name'  => $this->faker->name(),
            'ip_address' => $this->faker->ipv4(),
            'user_agent' => $this->faker->word(),
            'date_add'   => Carbon::now(),
            'date_upd'   => Carbon::now(),
            'private'    => $this->faker->boolean(),
            'read'       => $this->faker->boolean(),
        ];
    }
}

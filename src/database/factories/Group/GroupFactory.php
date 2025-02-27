<?php

namespace Flooris\Prestashop\Database\Factories\Group;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Group\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    protected $model = Group::class;

    public function definition(): array
    {
        return [
            'reduction'            => $this->faker->randomFloat(),
            'price_display_method' => $this->faker->boolean(),
            'show_prices'          => $this->faker->boolean(),
            'date_add'             => Carbon::now(),
            'date_upd'             => Carbon::now(),
        ];
    }
}

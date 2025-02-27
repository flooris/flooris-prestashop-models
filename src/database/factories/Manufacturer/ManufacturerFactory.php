<?php

namespace Flooris\Prestashop\Database\Factories\Manufacturer;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Manufacturer\Manufacturer;

class ManufacturerFactory extends Factory
{
    protected $model = Manufacturer::class;

    public function definition(): array
    {
        return [
            'name'         => $this->faker->name(),
            'date_add'     => Carbon::now(),
            'date_upd'     => Carbon::now(),
            'active'       => $this->faker->boolean(),
            'link_rewrite' => $this->faker->word(),
        ];
    }
}

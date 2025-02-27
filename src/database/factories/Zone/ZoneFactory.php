<?php

namespace Flooris\Prestashop\Database\Factories\Zone;

use Flooris\Prestashop\Models\Zone\Zone;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZoneFactory extends Factory
{
    protected $model = Zone::class;

    public function definition(): array
    {
        return [
            'name'   => $this->faker->name(),
            'active' => $this->faker->boolean(),
        ];
    }
}

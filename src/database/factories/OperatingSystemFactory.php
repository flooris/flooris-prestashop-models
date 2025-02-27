<?php

namespace Flooris\Prestashop\Database\Factories;

use Flooris\Prestashop\Models\OperatingSystem;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperatingSystemFactory extends Factory
{
    protected $model = OperatingSystem::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}

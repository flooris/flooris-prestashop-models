<?php

namespace Flooris\Prestashop\Database\Factories;

use Flooris\Prestashop\Models\Warehouse;
use Flooris\Prestashop\Enums\ManagementTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

class WarehouseFactory extends Factory
{
    protected $model = Warehouse::class;

    public function definition(): array
    {
        return [
            'reference'       => $this->faker->word(),
            'name'            => $this->faker->name(),
            'management_type' => $this->faker->randomElement(ManagementTypeEnum::class),
            'deleted'         => $this->faker->boolean(),
        ];
    }
}

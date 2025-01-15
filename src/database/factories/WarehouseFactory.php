<?php

namespace Flooris\Prestashop\Database\Factories;

use Flooris\Prestashop\Models\Address;
use Flooris\Prestashop\Models\Warehouse;
use Flooris\Prestashop\Models\Employee\Employee;
use Flooris\Prestashop\Models\Currency\Currency;
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

            'id_currency' => Currency::factory(),
            'id_address'  => Address::factory(),
            'id_employee' => Employee::factory(),
        ];
    }
}

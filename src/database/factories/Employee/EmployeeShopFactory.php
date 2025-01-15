<?php

namespace Flooris\Prestashop\Database\Factories\Employee;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Employee\EmployeeShop;

class EmployeeShopFactory extends Factory
{
    protected $model = EmployeeShop::class;

    public function definition(): array
    {
        return [
            'id_employee' => Employee::factory(),
            'id_shop'     => Shop::factory(),
        ];
    }
}

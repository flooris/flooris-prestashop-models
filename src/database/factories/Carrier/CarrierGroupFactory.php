<?php

namespace Flooris\Prestashop\Database\Factories\Carrier;

use Flooris\Prestashop\Models\Group\Group;
use Flooris\Prestashop\Models\Carrier\Carrier;
use Flooris\Prestashop\Models\Carrier\CarrierGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarrierGroupFactory extends Factory
{
    protected $model = CarrierGroup::class;

    public function definition(): array
    {
        return [
            'id_carrier' => Carrier::factory(),
            'id_group'   => Group::factory(),
        ];
    }
}

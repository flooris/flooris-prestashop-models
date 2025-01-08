<?php

namespace Flooris\Prestashop\Database\Factories\Carrier;

use Flooris\Prestashop\Models\Zone\Zone;
use Flooris\Prestashop\Models\Carrier\Carrier;
use Flooris\Prestashop\Models\Carrier\CarrierZone;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarrierZoneFactory extends Factory
{
    protected $model = CarrierZone::class;

    public function definition(): array
    {
        return [
            'id_carrier' => Carrier::factory(),
            'id_zone'    => Zone::factory(),
        ];
    }
}

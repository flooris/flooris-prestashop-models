<?php

namespace Flooris\Prestashop\Database\Factories\Supplier;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Supplier\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    protected $model = Supplier::class;

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

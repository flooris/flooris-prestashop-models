<?php

namespace Flooris\Prestashop\Database\Factories\Cart;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Cart\Cart;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    protected $model = Cart::class;

    public function definition(): array
    {
        return [
            'date_add' => Carbon::now(),
            'date_upd' => Carbon::now(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Product\ProductSale;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductSaleFactory extends Factory
{
    protected $model = ProductSale::class;

    public function definition(): array
    {
        return [
            'quantity' => $this->faker->randomNumber(),
            'sale_nbr' => $this->faker->randomNumber(),
            'date_upd' => Carbon::now(),
        ];
    }
}

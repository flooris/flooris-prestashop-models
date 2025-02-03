<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductSaleGrade;

class ProductSaleGradeFactory extends Factory
{
    protected $model = ProductSaleGrade::class;

    public function definition(): array
    {
        return [
            'sum_sold'      => $this->faker->randomNumber(),
            'id_order_from' => $this->faker->randomNumber(),
            'date_from'     => Carbon::now(),
            'sale_grade'    => $this->faker->randomNumber(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Product\Product;
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

            'id_product' => Product::factory(),
            'id_shop'    => Shop::factory(),
        ];
    }
}

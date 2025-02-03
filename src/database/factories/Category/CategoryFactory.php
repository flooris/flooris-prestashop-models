<?php

namespace Flooris\Prestashop\Database\Factories\Category;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Category\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'level_depth'               => $this->faker->boolean(),
            'mobile_fold_out'           => $this->faker->boolean(),
            'nleft'                     => $this->faker->randomNumber(),
            'nright'                    => $this->faker->randomNumber(),
            'active'                    => $this->faker->boolean(),
            'date_add'                  => Carbon::now(),
            'date_upd'                  => Carbon::now(),
            'position'                  => $this->faker->randomNumber(),
            'is_root_category'          => $this->faker->boolean(),
            'show_subcategory_products' => $this->faker->boolean(),
            'has_review_priority'       => $this->faker->boolean(),
        ];
    }
}

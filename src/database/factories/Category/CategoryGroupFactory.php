<?php

namespace Flooris\Prestashop\Database\Factories\Category;

use Flooris\Prestashop\Models\Group\Group;
use Flooris\Prestashop\Models\Category\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Category\CategoryGroup;

class CategoryGroupFactory extends Factory
{
    protected $model = CategoryGroup::class;

    public function definition(): array
    {
        return [
            'id_category' => Category::factory(),
            'id_group'    => Group::factory(),
        ];
    }
}

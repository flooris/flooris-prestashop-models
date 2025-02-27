<?php

namespace Flooris\Prestashop\Database\Factories\Group;

use Flooris\Prestashop\Models\Group\GroupLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupLangFactory extends Factory
{
    protected $model = GroupLang::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}

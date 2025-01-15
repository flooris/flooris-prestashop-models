<?php

namespace Flooris\Prestashop\Database\Factories\Tag;

use Flooris\Prestashop\Models\Tag\Tag;
use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Group\Group;
use Flooris\Prestashop\Models\Tag\TagCount;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagCountFactory extends Factory
{
    protected $model = TagCount::class;

    public function definition(): array
    {
        return [
            'counter' => $this->faker->randomNumber(),

            'id_group' => Group::factory(),
            'id_tag'   => Tag::factory(),
            'id_lang'  => Language::factory(),
            'id_shop'  => Shop::factory(),
        ];
    }
}

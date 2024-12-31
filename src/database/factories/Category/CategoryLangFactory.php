<?php

namespace Flooris\Prestashop\Database\Factories\Category;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Category\CategoryLang;

class CategoryLangFactory extends Factory
{
    protected $model = CategoryLang::class;

    public function definition(): array
    {
        return [
            'name'             => $this->faker->name(),
            'description'      => $this->faker->text(),
            'link_rewrite'     => $this->faker->word(),
            'meta_title'       => $this->faker->word(),
            'meta_keywords'    => $this->faker->word(),
            'meta_description' => $this->faker->text(),
            'footer_text'      => $this->faker->text(),
            'title_short'      => $this->faker->word(),
        ];
    }
}

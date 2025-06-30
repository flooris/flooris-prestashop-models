<?php

namespace Flooris\Prestashop\Database\Factories\Meta;

use Flooris\Prestashop\Models\Meta\MetaLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class MetaLangFactory extends Factory
{
    protected $model = MetaLang::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title'       => $this->faker->word(),
            'description' => $this->faker->text(),
            'keywords'    => $this->faker->word(),
            'url_rewrite' => $this->faker->url(),
        ];
    }
}

<?php

namespace Flooris\Prestashop\Database\Factories\Supplier;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Supplier\SupplierLang;

class SupplierLangFactory extends Factory
{
    protected $model = SupplierLang::class;

    public function definition(): array
    {
        return [
            'description'      => $this->faker->text(),
            'meta_title'       => $this->faker->word(),
            'meta_keywords'    => $this->faker->word(),
            'meta_description' => $this->faker->text(),
        ];
    }
}

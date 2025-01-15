<?php

namespace Flooris\Prestashop\Database\Factories\Supplier;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Supplier\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Supplier\SupplierLang;

class SupplierLangFactory extends Factory
{
    protected $model = SupplierLang::class;

    public function definition(): array
    {
        return [
            'id_supplier'      => Supplier::factory(),
            'id_lang'          => Language::factory(),
            'description'      => $this->faker->text(),
            'meta_title'       => $this->faker->word(),
            'meta_keywords'    => $this->faker->word(),
            'meta_description' => $this->faker->text(),
        ];
    }
}

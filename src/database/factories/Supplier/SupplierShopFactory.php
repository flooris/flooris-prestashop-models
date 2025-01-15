<?php

namespace Flooris\Prestashop\Database\Factories\Supplier;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Supplier\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Supplier\SupplierShop;

class SupplierShopFactory extends Factory
{
    protected $model = SupplierShop::class;

    public function definition(): array
    {
        return [
            'id_supplier' => Supplier::factory(),
            'id_shop'     => Shop::factory(),
        ];
    }
}

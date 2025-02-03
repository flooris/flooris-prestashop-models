<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Flooris\Prestashop\Models\Order\OrderDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    protected $model = OrderDetail::class;

    public function definition(): array
    {
        return [
            'product_name'                  => $this->faker->name(),
            'product_combination_name'      => $this->faker->name(),
            'product_name_bare'             => $this->faker->name(),
            'product_name_invoice'          => $this->faker->name(),
            'product_promotion_name'        => $this->faker->name(),
            'product_quantity'              => $this->faker->randomNumber(),
            'product_quantity_in_stock'     => $this->faker->randomNumber(),
            'product_quantity_refunded'     => $this->faker->randomNumber(),
            'product_quantity_return'       => $this->faker->randomNumber(),
            'product_quantity_reinjected'   => $this->faker->randomNumber(),
            'product_price'                 => $this->faker->randomFloat(),
            'reduction_percent'             => $this->faker->randomFloat(),
            'reduction_amount'              => $this->faker->randomFloat(),
            'reduction_amount_tax_incl'     => $this->faker->randomFloat(),
            'reduction_amount_tax_excl'     => $this->faker->randomFloat(),
            'group_reduction'               => $this->faker->randomFloat(),
            'product_quantity_discount'     => $this->faker->randomFloat(),
            'product_ean13'                 => $this->faker->word(),
            'product_upc'                   => $this->faker->word(),
            'product_reference'             => $this->faker->word(),
            'product_supplier_reference'    => $this->faker->word(),
            'product_weight'                => $this->faker->randomFloat(),
            'tax_computation_method'        => $this->faker->randomNumber(),
            'tax_name'                      => $this->faker->name(),
            'tax_rate'                      => $this->faker->randomFloat(),
            'ecotax'                        => $this->faker->randomFloat(),
            'ecotax_tax_rate'               => $this->faker->randomFloat(),
            'discount_quantity_applied'     => $this->faker->randomNumber(),
            'download_hash'                 => $this->faker->word(),
            'download_nb'                   => $this->faker->randomNumber(),
            'download_deadline'             => $this->faker->word(),
            'total_price_tax_incl'          => $this->faker->randomFloat(),
            'total_price_tax_excl'          => $this->faker->randomFloat(),
            'unit_price_tax_incl'           => $this->faker->randomFloat(),
            'unit_price_tax_excl'           => $this->faker->randomFloat(),
            'total_shipping_price_tax_incl' => $this->faker->randomFloat(),
            'total_shipping_price_tax_excl' => $this->faker->randomFloat(),
            'purchase_supplier_price'       => $this->faker->randomFloat(),
            'original_product_price'        => $this->faker->randomFloat(),
            'original_wholesale_price'      => $this->faker->randomFloat(),
        ];
    }
}

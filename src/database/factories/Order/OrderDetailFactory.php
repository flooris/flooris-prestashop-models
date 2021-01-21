<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Flooris\Prestashop\Models\Product\Product;
use Flooris\Prestashop\Models\Order\OrderDetail;
use Flooris\Prestashop\Models\Order\OrderInvoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class OrderDetailFactory
 *
 * @package Flooris\Prestashop\Database\Factories\Order
 */
class OrderDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
            return [
                'id_order_invoice'              => OrderInvoice::factory(),
                'id_order'                      => fn (array $attributes) => OrderInvoice::find($attributes['id_order_invoice'])->id_order,
                'id_warehouse'                  => 0,
                'id_shop'                       => 0,
                'product_id'                    => Product::factory(),
                'product_attribute_id'          => $this->faker->randomNumber(4),
                'product_name'                  => "{$this->faker->words(6, true)} - {$this->faker->numerify($this->faker->randomElement(config('prestashop.seeder.attribute_options')))}",
                'product_quantity'              => $product_quantity = $this->faker->biasedNumberBetween(1, 8, fn ($n) => $n ** 2),
                'product_quantity_in_stock'     => 1,
                'product_quantity_refunded'     => 0,
                'product_quantity_return'       => 0,
                'product_quantity_reinjected'   => 0,
                'product_price'                 => $product_price = $this->faker->randomFloat(2, 10, 120),
                'reduction_percent'             => 0,
                'reduction_amount'              => 0,
                'reduction_amount_tax_incl'     => 0,
                'reduction_amount_tax_excl'     => 0,
                'group_reduction'               => 0,
                'product_quantity_discount'     => 0,
                'product_ean13'                 => $this->faker->ean13,
                'product_upc'                   => '',
                'product_reference'             => '',
                'product_weight'                => $this->faker->randomNumber(2),
                'tax_computation_method'        => 0,
                'tax_name'                      => '',
                'tax_rate'                      => 0,
                'ecotax'                        => 0,
                'ecotax_tax_rate'               => 0,
                'discount_quantity_applied'     => 0,
                'download_hash'                 => '',
                'download_nb'                   => 0,
                'download_deadline'             => null,
                'total_price_tax_incl'          => $product_price,
                'total_price_tax_excl'          => $product_price / 1.21,
                'unit_price_tax_incl'           => $product_price / $product_quantity,
                'unit_price_tax_excl'           => $product_price / $product_quantity / 1.21,
                'total_shipping_price_tax_incl' => 0,
                'total_shipping_price_tax_excl' => 0,
                'purchase_supplier_price'       => 0,
                'original_product_price'        => $product_price / $product_quantity / 1.21,
            ];
        }
}

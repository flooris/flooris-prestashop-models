<?php

namespace Flooris\Prestashop\Models\Order;

use Flooris\Prestashop\Models\Warehouse;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Product\Product;
use Flooris\Prestashop\Models\Tax\TaxRulesGroup;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Models\Product\ProductAttribute;
use Flooris\Prestashop\Traits\HasPrestashopModelFactoryTrait;

/**
 * Class OrderDetail
 *
 * @property int         $id_order_detail
 * @property int         $id_order
 * @property int|null    $id_order_invoice
 * @property int|null    $id_warehouse
 * @property int         $id_shop
 * @property int         $product_id
 * @property int|null    $product_attribute_id
 * @property string      $product_name
 * @property string      $product_combination_name
 * @property string      $product_name_bare
 * @property string|null $product_name_invoice
 * @property string|null $product_promotion_name
 * @property int         $product_quantity
 * @property int         $product_quantity_in_stock
 * @property int         $product_quantity_refunded
 * @property int         $product_quantity_return
 * @property int         $product_quantity_reinjected
 * @property float       $product_price
 * @property float       $reduction_percent
 * @property float       $reduction_amount
 * @property float       $reduction_amount_tax_incl
 * @property float       $reduction_amount_tax_excl
 * @property float       $group_reduction
 * @property float       $product_quantity_discount
 * @property string|null $product_ean13
 * @property string|null $product_upc
 * @property string|null $product_reference
 * @property string|null $product_supplier_reference
 * @property float       $product_weight
 * @property int|null    $id_tax_rules_group
 * @property int         $tax_computation_method
 * @property string      $tax_name
 * @property float       $tax_rate
 * @property float       $ecotax
 * @property float       $ecotax_tax_rate
 * @property int         $discount_quantity_applied
 * @property string|null $download_hash
 * @property int|null    $download_nb
 * @property string|null $download_deadline
 * @property float       $total_price_tax_incl
 * @property float       $total_price_tax_excl
 * @property float       $unit_price_tax_incl
 * @property float       $unit_price_tax_excl
 * @property float       $total_shipping_price_tax_incl
 * @property float       $total_shipping_price_tax_excl
 * @property float       $purchase_supplier_price
 * @property float       $original_product_price
 * @property float       $original_wholesale_price
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderDetail extends PrestashopModel
{


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_detail';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_order_detail';

    /**
     * Get the order that the order detail belongs to.
     *
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'id_order', 'id_order');
    }

    /**
     * Get the product the order detail belongs to.
     *
     * @return HasOne
     */
    public function product(): HasOne
    {
        return $this->HasOne(Product::class, 'product_id', 'id_product');
    }

    /**
     * Get the order invoice that the order detail belongs to.
     *
     * @return BelongsTo
     */
    public function orderInvoice(): BelongsTo
    {
        return $this->belongsTo(OrderInvoice::class, 'id_order_invoice', 'id_order_invoice');
    }

    /**
     * Get the warehouse the order detail belongs to.
     *
     * @return BelongsTo
     */
    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class, 'id_warehouse', 'id_warehouse');
    }

    /**
     * Get the tax rules group the order detail belongs to.
     *
     * @return BelongsTo
     */
    public function taxRulesGroup(): BelongsTo
    {
        return $this->belongsTo(TaxRulesGroup::class, 'id_tax_rules_group', 'id_tax_rules_group');
    }

    /**
     * Get the shop the order detail belongs to.
     *
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id_shop', 'id_shop');
    }

    /**
     * Get the product attribute the order detail belongs to.
     *
     * @return BelongsTo
     */
    public function productAttribute(): BelongsTo
    {
        return $this->belongsTo(ProductAttribute::class, 'product_attribute_id', 'id_product_attribute');
    }

    /**
     * Get the total weight of the order detail.
     *
     * @return float
     */
    public function getWeightAttribute(): float
    {
        return $this->product_quantity * $this->product_weight;
    }
}

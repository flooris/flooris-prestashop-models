<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Traits\HasPrestashopModelFactoryTrait;

/**
 * Class Product
 *
 * @property int         $id_product_attribute
 * @property int         $id_product
 * @property string|null $reference
 * @property string|null $supplier_reference
 * @property string|null $location
 * @property string|null $ean13
 * @property string|null $upc
 * @property float       $wholesale_price
 * @property float       $price
 * @property float       $ecotax
 * @property int         $quantity
 * @property float       $weight
 * @property float|null  $unit_price_impact
 * @property int|null    $default_on
 * @property int         $minimal_quantity
 * @property string|null $available_date
 * @property string|null $unavailable_status
 * @property string|null $frontend_label
 * @property int         $active
 * @property string      $invoice_name
 * @property string      $condition
 * @property string|null $warehouse_category
 * @property float       $gross_weight
 * @property int         $is_bundle_in_feed
 *
 * @package Flooris\Prestashop\Models\Product
 */
class ProductAttribute extends PrestashopModel
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
    protected $table = 'product_attribute';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_product_attribute';

    /**
     * Get the product the attribute belongs to.
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }

    /**
     * Get the shops the attribute has many to.
     */
    public function productAttributeShops(): HasMany
    {
        return $this->hasMany(ProductAttributeShop::class, 'id_product_attribute', 'id_product_attribute');
    }

}

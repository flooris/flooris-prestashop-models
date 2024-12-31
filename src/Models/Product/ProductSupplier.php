<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Supplier\Supplier;
use Flooris\Prestashop\Models\Currency\Currency;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ProductSupplier
 *
 * @property int    $id_product_supplier
 * @property int    $id_product
 * @property int    $id_product_attribute
 * @property int    $id_supplier
 * @property string $product_supplier_reference
 * @property float  $product_supplier_price_te
 * @property int    $id_currency
 *
 * @package Flooris\Prestashop\Models\Product
 */
class ProductSupplier extends PrestashopModel
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
    protected $table = 'product_supplier';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_product_supplier';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'product_supplier_price_te' => 'float',
    ];

    /**
     * Get the product that the product supplier belongs to.
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }

    /**
     * Get the product attribute that the product supplier belongs to.
     *
     * @return BelongsTo
     */
    public function productAttribute(): BelongsTo
    {
        return $this->belongsTo(ProductAttribute::class, 'id_product_attribute', 'id_product_attribute');
    }

    /**
     * Get the supplier that the product supplier belongs to.
     *
     * @return BelongsTo
     */
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id_supplier');
    }

    /**
     * Get the currency that the product supplier belongs to.
     *
     * @return BelongsTo
     */
    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'id_currency', 'id_currency');
    }
}

<?php

namespace Flooris\Prestashop\Models\Product;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ProductAttributeSale
 *
 * @property int     $id_product_attribute
 * @property int     $id_shop
 * @property int     $sum_sold
 * @property ?int    $id_order_from
 * @property ?Carbon $date_from
 * @property int     $sale_grade
 *
 * @package Flooris\Prestashop\Models\Product
 */
class ProductAttributeSale extends PrestashopModel
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
    protected $table = 'product_attribute_sale';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_product_attribute';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'date_from' => 'datetime',
    ];

    /**
     * Get the product attribute that the product attribute sale belongs to.
     *
     * @return BelongsTo
     */
    public function productAttribute(): BelongsTo
    {
        return $this->belongsTo(ProductAttribute::class, 'id_product_attribute', 'id_product_attribute');
    }

    /**
     * Get the shop the product attribute sale belongs to.
     *
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id_shop', 'id_shop');
    }
}

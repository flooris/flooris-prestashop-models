<?php

namespace Flooris\Prestashop\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Models\Product\ProductAttribute;

/**
 * Class AffiliatePrice
 *
 * @property int    $id
 * @property int    $id_product_attribute
 * @property string $affiliate_key
 * @property float  $price_tax_incl
 *
 * @package Flooris\Prestashop\Models
 */
class AffiliatePrice extends PrestashopModel
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
    protected $table = 'affiliate_price';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'price_tax_incl' => 'float',
    ];

    /**
     * Get the product attribute that the affiliate price belongs to.
     *
     * @return BelongsTo
     */
    public function productAttribute(): BelongsTo
    {
        return $this->belongsTo(ProductAttribute::class, 'id_product_attribute');
    }

}

<?php

namespace Flooris\Prestashop\Models\Attribute;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Product\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class AttributeImpact
 *
 * @property int   $id_attribute_impact
 * @property int   $id_attribute
 * @property int   $id_product
 * @property float $weight
 * @property float $price
 *
 * @package Flooris\Prestashop\Models\Attribute
 */
class AttributeImpact extends PrestashopModel
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
    protected $table = 'attribute_impact';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_attribute_impact';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'weight' => 'float',
        'price'  => 'float',
    ];

    /**
     * Get the product that attribute impact belongs to.
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }

    /**
     * Get the product that attribute impact belongs to.
     *
     * @return BelongsTo
     */
    public function attribute(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'id_attribute', 'id_attribute');
    }
}

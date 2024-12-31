<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ProductAttributeInfo
 *
 * @property int $id_product_attribute
 * @property int $id_product
 * @property int $voordeelmailsegmenthond
 * @property int $voordeelmailsegmentkat
 * @property int $voordeelmailsegmentknaagdierkonijn
 * @property int $voordeelmailsegmentvogel
 * @property int $voordeelmailsegmentpaardvee
 * @property int $voordeelmailsegmentvis
 * @property int $herbesteltermijn
 *
 * @package Flooris\Prestashop\Models\Product
 */
class ProductAttributeInfo extends PrestashopModel
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
    protected $table = 'product_attribute_info';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_product_attribute';

    /**
     * Get the product attribute that the product attribute info belongs to.
     *
     * @return BelongsTo
     */
    public function productAttribute(): BelongsTo
    {
        return $this->belongsTo(ProductAttribute::class, 'id_product_attribute', 'id_product_attribute');
    }

    /**
     * Get the product that the product attribute info belongs to.
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}

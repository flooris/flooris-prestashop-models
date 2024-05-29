<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class ProductAttributeShop
 *
 * @package Flooris\Prestashop\Models\Product
 */
class ProductAttributeShop extends PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_attribute_shop';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_product_attribute', 'id_shop'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public $incrementing = false;

    public $casts = [
        'active'               => 'boolean',
        'id_product_attribute' => 'int',
        'id_shop'              => 'int',
        'id_product'           => 'int',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'wholesale_price'   => 0,
        'ecotax'            => 0,
        'weight'            => 0,
        'minimal_quantity'  => 1,
        'unit_price_impact' => 0,
        'default_on'        => null,
        'available_date'    => '0000-00-00',
    ];

    /**
     * Get the product the shop attribute belongs to.
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}

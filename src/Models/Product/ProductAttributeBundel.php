<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ProductAttributeBundel
 *
 * @property int     $id_product_attribute_verkoop
 * @property int     $id_product_attribute_voorraad
 * @property int     $aantal
 * @property ?string $ean13
 * @property int     $id_product_attribute_bundel
 *
 * @package Flooris\Prestashop\Models\Product
 */
class ProductAttributeBundel extends PrestashopModel
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
    protected $table = 'product_attribute_bundel';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_product_attribute_bundel';

    /**
     * Get the product attribute voorraad that the product attribute bundel belongs to.
     *
     * @return BelongsTo
     */
    public function productAttributeVoorraad(): BelongsTo
    {
        return $this->belongsTo(ProductAttribute::class, 'id_product_attribute_voorraad', 'id_product_attribute');
    }

    /**
     * Get the product attribute verkoop that the product attribute bundel belongs to.
     *
     * @return BelongsTo
     */
    public function productAttributeVerkoop(): BelongsTo
    {
        return $this->belongsTo(ProductAttribute::class, 'id_product_attribute_verkoop', 'id_product_attribute');
    }
}

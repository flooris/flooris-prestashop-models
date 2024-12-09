<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductShop extends PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * The table associated with the model.
     *
     * @property int         $id_product
     * @property int         $id_shop
     * @property int|null    $id_category_default
     * @property int         $id_tax_rules_group
     * @property int         $on_sale
     * @property int         $online_only
     * @property float       $ecotax
     * @property int         $minimal_quantity
     * @property float       $price
     * @property float       $wholesale_price
     * @property string|null $unity
     * @property float       $unit_price_ratio
     * @property float       $additional_shipping_cost
     * @property int         $customizable
     * @property int         $uploadable_files
     * @property int         $text_fields
     * @property int         $active
     * @property string      $redirect_type
     * @property int         $id_product_redirected
     * @property int         $available_for_order
     * @property string      $available_date
     * @property string      $condition
     * @property int         $show_price
     * @property int         $indexed
     * @property string      $visibility
     * @property int|null    $cache_default_attribute
     * @property int         $advanced_stock_management
     * @property string      $date_add
     * @property string      $date_upd
     * @property int|null    $pack_stock_type
     *
     * @var string
     */
    protected $table = 'product_shop';

    protected $primaryKey = ['id_product', 'id_shop', 'id_lang'];

    public $incrementing = false;

    /**
     * Get product the feature belongs to.
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}

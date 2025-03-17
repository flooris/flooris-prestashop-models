<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Category\Category;
use Flooris\Prestashop\Models\Tax\TaxRulesGroup;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Enums\ProductShopConditionEnum;
use Flooris\Prestashop\Enums\ProductShopRedirectTypeEnum;
use Flooris\Prestashop\Enums\SpecificPriceRuleReductionTypeEnum;

/**
 * Class ProductShop
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
 * @package Flooris\Prestashop\Models\Product
 */
class ProductShop extends PrestashopModel
{
    use CompositeKeyModelTrait;

    public $incrementing = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_shop';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_product', 'id_shop'];
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'condition'     => ProductShopConditionEnum::class,
        'redirect_type' => ProductShopRedirectTypeEnum::class,
        'visibility'    => SpecificPriceRuleReductionTypeEnum::class,
    ];

    /**
     * Get product the product shop belongs to.
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }

    /**
     * Get shop the product shop belongs to.
     *
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id_shop', 'id_shop');
    }

    /**
     * Get category default the product shop belongs to.
     *
     * @return BelongsTo
     */
    public function categoryDefault(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_category_default', 'id_category');
    }

    /**
     * Get tax rules group the product shop belongs to.
     *
     * @return BelongsTo
     */
    public function taxRulesGroup(): BelongsTo
    {
        return $this->belongsTo(TaxRulesGroup::class, 'id_tax_rules_group', 'id_tax_rules_group');
    }
}

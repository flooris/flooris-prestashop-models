<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Image\Image;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Feature\Feature;
use Flooris\Prestashop\Models\Category\Category;
use Flooris\Prestashop\Models\Supplier\Supplier;
use Flooris\Prestashop\Models\Tax\TaxRulesGroup;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Models\Feature\FeatureProduct;
use Flooris\Prestashop\Models\Manufacturer\Manufacturer;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Flooris\Prestashop\Traits\HasPrestashopModelFactoryTrait;

/**
 * Class Product
 *
 * @property int         $id_product
 * @property int|null    $id_supplier
 * @property int|null    $id_manufacturer
 * @property int|null    $id_category_default
 * @property int         $id_shop_default
 * @property int         $id_tax_rules_group
 * @property int         $on_sale
 * @property int         $online_only
 * @property string|null $ean13
 * @property string|null $upc
 * @property float       $ecotax
 * @property int         $quantity
 * @property int         $minimal_quantity
 * @property float       $price
 * @property float       $wholesale_price
 * @property string|null $unity
 * @property float       $unit_price_ratio
 * @property float       $additional_shipping_cost
 * @property string|null $reference
 * @property string|null $supplier_reference
 * @property string|null $location
 * @property float       $width
 * @property float       $height
 * @property float       $depth
 * @property float       $weight
 * @property int         $out_of_stock
 * @property int|null    $quantity_discount
 * @property int         $customizable
 * @property int         $uploadable_files
 * @property int         $text_fields
 * @property int         $active
 * @property string      $redirect_type
 * @property int         $id_product_redirected
 * @property int         $available_for_order
 * @property string|null $available_date
 * @property string      $condition
 * @property int         $show_price
 * @property int         $indexed
 * @property string      $visibility
 * @property int         $cache_is_pack
 * @property int         $cache_has_attachments
 * @property int         $is_virtual
 * @property int|null    $cache_default_attribute
 * @property string      $date_add
 * @property string      $date_upd
 * @property int         $advanced_stock_management
 * @property int|null    $id_googlecategory
 * @property string      $name_invoice
 * @property int         $store_location
 * @property int|null    $pack_stock_type
 * @property string|null $hs_code
 * @property string|null $origin_country
 * @property int         $review_priority
 *
 * @package Flooris\Prestashop\Models\Product
 */
class Product extends PrestashopModel
{


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_product';


    /**
     * Get category the product belongs to.
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_category_default', 'id_category');
    }

    /**
     * Get the supplier the product belongs to.
     *
     * @return BelongsTo
     */
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id_supplier');
    }

    /**
     * Get the manufacturer the product belongs to.
     *
     * @return BelongsTo
     */
    public function manufacturer(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class, 'id_manufacturer', 'id_manufacturer');
    }

    /**
     * Get the shop default the product belongs to.
     *
     * @return BelongsTo
     */
    public function shopDefault(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id_shop_default', 'id_shop');
    }

    /**
     * Get the tax rules group the product belongs to.
     *
     * @return BelongsTo
     */
    public function taxRulesGroup(): BelongsTo
    {
        return $this->belongsTo(TaxRulesGroup::class, 'id_tax_rules_group', 'id_tax_rules_group');
    }

    public function featureProducts(): HasMany
    {
        return $this->hasMany(FeatureProduct::class, 'id_product');
    }

    public function features(): HasManyThrough
    {
        return $this->hasManyThrough(
            Feature::class,
            FeatureProduct::class,
            'id_product',
            'id_feature',
            'id_product',
            'id_feature'
        );
    }

    public function getCoverImageAttribute()
    {
        return $this->images()->where('cover')->first();
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'id_product');
    }

    public function translations(): HasMany
    {
        return $this->hasMany(ProductLang::class, 'id_product');
    }

    public function productShops(): HasMany
    {
        return $this->hasMany(ProductShop::class, 'id_product');
    }
}

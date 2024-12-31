<?php

namespace Flooris\Prestashop\Models\SpecificPrice;


use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Cart\Cart;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Group\Group;
use Flooris\Prestashop\Models\Shop\ShopGroup;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Product\Product;
use Flooris\Prestashop\Models\Country\Country;
use Flooris\Prestashop\Models\Currency\Currency;
use Flooris\Prestashop\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Models\Product\ProductAttribute;

/**
 * Class SpecificPrice
 *
 * @package Flooris\Prestashop\Models\SpecificPrice
 * @property int         $id_specific_price
 * @property int         $id_specific_price_rule
 * @property int         $id_cart
 * @property int         $id_product
 * @property int         $id_shop
 * @property int         $id_shop_group
 * @property int         $id_currency
 * @property int         $id_country
 * @property int         $id_group
 * @property int         $id_customer
 * @property int         $id_product_attribute
 * @property float       $price
 * @property int         $from_quantity
 * @property float       $reduction
 * @property int         $reduction_tax
 * @property string      $reduction_type
 * @property Carbon|null $from
 * @property Carbon|null $to
 */
class SpecificPrice extends PrestashopModel
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
    protected $table = 'specific_price';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_specific_price';
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'from' => 'datetime',
        'to'   => 'datetime',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'id_specific_price_rule' => 0,
        'price'                  => 0,
        'id_shop'                => 0,
        'id_cart'                => 0,
        'id_shop_group'          => 0,
        'id_currency'            => 0,
        'id_country'             => 0,
        'id_group'               => 0,
        'id_customer'            => 0,
        'id_product_attribute'   => 0,
        'from_quantity'          => 1,
        'reduction_tax'          => 1,
    ];

    /**
     * Get the specific price rule that the specific price belongs to.
     *
     * @return BelongsTo
     */
    public function specificPriceRule(): BelongsTo
    {
        return $this->belongsTo(SpecificPriceRule::class, 'id_specific_price_rule', 'id_specific_price_rule');
    }

    /**
     * Get the cart that the specific price belongs to.
     *
     * @return BelongsTo
     */
    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class, 'id_cart', 'id_cart');
    }

    /**
     * Get the product that the specific price belongs to.
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }

    /**
     * Get the shop that the specific price belongs to.
     *
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id_shop', 'id_shop');
    }

    /**
     * Get the shop group that the specific price belongs to.
     *
     * @return BelongsTo
     */
    public function shopGroup(): BelongsTo
    {
        return $this->belongsTo(ShopGroup::class, 'id_shop_group', 'id_shop_group');
    }

    /**
     * Get the currency that the specific price belongs to.
     *
     * @return BelongsTo
     */
    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'id_currency', 'id_currency');
    }

    /**
     * Get the country that the specific price belongs to.
     *
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'id_country', 'id_country');
    }

    /**
     * Get the group that the specific price belongs to.
     *
     * @return BelongsTo
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'id_group', 'id_group');
    }

    /**
     * Get the customer that the specific price belongs to.
     *
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    /**
     * Get the product attribute that the specific price belongs to.
     *
     * @return BelongsTo
     */
    public function productAttribute(): BelongsTo
    {
        return $this->belongsTo(ProductAttribute::class, 'id_product_attribute', 'id_product_attribute');
    }
}

<?php

namespace Flooris\Prestashop\Models\Cart;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Address;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Product\Product;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Models\Product\ProductAttribute;

/**
 * Class CartProduct
 *
 * @property int    $id_cart
 * @property int    $id_product
 * @property int    $id_address_delivery
 * @property int    $id_shop
 * @property int    $id_product_attribute
 * @property int    $quantity
 * @property Carbon $date_add
 *
 * @package Flooris\Prestashop\Models\Cart
 */
class CartProduct extends PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cart_product';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_cart', 'id_product', 'id_product_attribute', 'id_address_delivery'];

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'date_add' => 'datetime',
    ];

    /**
     * Get the product that the cart belongs to.
     *
     * @return BelongsTo
     */
    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class, 'id_cart', 'id_cart');
    }

    /**
     * Get the product that the cart belongs to.
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }

    /**
     * Get the product attribute that the cart belongs to.
     *
     * @return BelongsTo
     */
    public function productAttribute(): BelongsTo
    {
        return $this->belongsTo(ProductAttribute::class, 'id_product_attribute', 'id_product_attribute');
    }

    /**
     * Get the shop that the cart belongs to.
     *
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id_shop', 'id_shop');
    }

    /**
     * Get the address delivery
     *
     * @return HasOne
     */
    public function addressDelivery(): HasOne
    {
        return $this->hasOne(Address::class, 'id_address', 'id_address_delivery');
    }
}

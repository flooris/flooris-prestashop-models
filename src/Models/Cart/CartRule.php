<?php

namespace Flooris\Prestashop\Models\Cart;


use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class CartRule
 *
 * @property int     id_cart_rule
 * @property int     id_customer
 * @property Carbon  date_from
 * @property Carbon  date_to
 * @property ?string description
 * @property int     quantity
 * @property int     quantity_per_user
 * @property int     priority
 * @property boolean partial_use
 * @property string  code
 * @property float   minimum_amount
 * @property boolean minimum_amount_tax
 * @property int     minimum_amount_currency
 * @property boolean minimum_amount_shipping
 * @property boolean country_restriction
 * @property boolean carrier_restriction
 * @property boolean group_restriction
 * @property boolean cart_rule_restriction
 * @property boolean product_restriction
 * @property boolean shop_restriction
 * @property boolean free_shipping
 * @property float   reduction_percent
 * @property float   reduction_amount
 * @property boolean reduction_tax
 * @property int     reduction_currency
 * @property int     reduction_product
 * @property int     gift_product
 * @property int     gift_product_attribute
 * @property boolean highlight
 * @property boolean active
 * @property Carbon  date_add
 * @property Carbon  date_upd
 *
 * @package Flooris\Prestashop\Models\Cart
 */
class CartRule extends PrestashopModel
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    protected $table = 'cart_rule';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_cart_rule';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'date_from'               => 'datetime',
        'date_to'                 => 'datetime',
        'partial_use'             => 'boolean',
        'minimum_amount'          => 'float',
        'minimum_amount_tax'      => 'boolean',
        'minimum_amount_shipping' => 'boolean',
        'country_restriction'     => 'boolean',
        'carrier_restriction'     => 'boolean',
        'group_restriction'       => 'boolean',
        'cart_rule_restriction'   => 'boolean',
        'product_restriction'     => 'boolean',
        'shop_restriction'        => 'boolean',
        'free_shipping'           => 'boolean',
        'reduction_percent'       => 'float',
        'reduction_amount'        => 'float',
        'reduction_tax'           => 'boolean',
        'highlight'               => 'boolean',
        'active'                  => 'boolean',
        'date_add'                => 'datetime',
        'date_upd'                => 'datetime',
    ];

    /**
     * Get the customer that the cart rule belongs to.
     *
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }
}

<?php

namespace Flooris\Prestashop\Models\Order;

use Flooris\Prestashop\Models\Cart\CartRule;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class OrderCartRule
 *
 * @property int     $id_order_cart_rule
 * @property int     $id_order
 * @property int     $id_cart_rule
 * @property int     $id_order_invoice
 * @property string  $name
 * @property float   $value
 * @property float   $value_tax_excl
 * @property boolean $free_shipping
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderCartRule extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_cart_rule';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_order_cart_rule';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'value'          => 'float',
        'value_tax_excl' => 'float',
        'free_shipping'  => 'boolean',
    ];

    /**
     * Get the order that the order carrier belongs to.
     *
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'id_order', 'id_order');
    }

    /**
     * Get the cart rule that the order carrier belongs to.
     *
     * @return BelongsTo
     */
    public function cartRule(): BelongsTo
    {
        return $this->belongsTo(CartRule::class, 'id_cart_rule', 'id_cart_rule');
    }

    /**
     * Get the order invoice that the order carrier belongs to.
     *
     * @return BelongsTo
     */
    public function orderInvoice(): BelongsTo
    {
        return $this->belongsTo(OrderInvoice::class, 'id_order_invoice', 'id_order_invoice');
    }
}

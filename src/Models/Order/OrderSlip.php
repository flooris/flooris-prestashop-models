<?php

namespace Flooris\Prestashop\Models\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class OrderSlip
 *
 * @property int     $id_order_slip
 * @property float   $conversion_rate
 * @property int     $id_customer
 * @property int     $id_order
 * @property ?float  $total_products_tax_excl
 * @property ?float  $total_products_tax_incl
 * @property ?float  $total_shipping_tax_excl
 * @property ?float  $total_shipping_tax_incl
 * @property boolean $shipping_cost
 * @property float   $amount
 * @property float   $shipping_cost_amount
 * @property boolean $partial
 * @property boolean $order_slip_type
 * @property Carbon  $date_add
 * @property Carbon  $date_upd
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderSlip extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_slip';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_order_slip';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'conversion_rate'         => 'float',
        'total_products_tax_excl' => 'float',
        'total_products_tax_incl' => 'float',
        'total_shipping_tax_excl' => 'float',
        'total_shipping_tax_incl' => 'float',
        'shipping_cost'           => 'boolean',
        'amount'                  => 'float',
        'shipping_cost_amount'    => 'float',
        'partial'                 => 'boolean',
        'order_slip_type'         => 'boolean',
        'date_add'                => 'datetime',
        'date_upd'                => 'datetime',
    ];

    /**
     * Get the customer that the order slip belongs to.
     *
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    /**
     * Get the order that the order slip belongs to.
     *
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'id_order', 'id_order');
    }
}

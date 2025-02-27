<?php

namespace Flooris\Prestashop\Models\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Carrier\Carrier;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class OrderCarrier
 *
 * @property int    $id_order_carrier
 * @property int    $id_order
 * @property int    $id_carrier
 * @property int    $id_order_invoice
 * @property float  $weight
 * @property float  $shipping_cost_tax_excl
 * @property float  $shipping_cost_tax_incl
 * @property string $tracking_number
 * @property Carbon $date_add
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderCarrier extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_carrier';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_order_carrier';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'weight'                 => 'float',
        'shipping_cost_tax_excl' => 'float',
        'shipping_cost_tax_incl' => 'float',
        'date_add'               => 'datetime',
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
     * Get the carrier that the order carrier belongs to.
     *
     * @return BelongsTo
     */
    public function carrier(): BelongsTo
    {
        return $this->belongsTo(Carrier::class, 'id_carrier', 'id_carrier');
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

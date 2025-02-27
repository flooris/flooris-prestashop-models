<?php

namespace Flooris\Prestashop\Models\Order;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class OrderShipment
 *
 * @property int    $id_order_shipment
 * @property int    $id_order
 * @property int    $id_customer
 * @property string $email_address
 * @property string $track_and_trace
 * @property int    $is_processed
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderShipments extends PrestashopModel
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
    protected $table = 'order_shipments';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_order_shipment';

    /**
     * Get the order that the order shipment belongs to.
     *
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'id_order', 'id_order');
    }

    /**
     * Get the customer that the order shipment belongs to.
     *
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }
}

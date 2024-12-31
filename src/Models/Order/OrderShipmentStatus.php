<?php

namespace Flooris\Prestashop\Models\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Enums\OrderShipmentStatusEnum;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class OrderShipmentStatus
 *
 * @property int         $id
 * @property int         $id_order
 * @property int|null    $id_logistics_user
 * @property string      $barcode
 * @property string      $file_path
 * @property string      $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $delivered_date
 * @property Carbon|null $returned_date
 * @property Carbon|null $invited_date
 * @package Flooris\Prestashop\Models\Order
 */
class OrderShipmentStatus extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_shipment_status';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'status'         => OrderShipmentStatusEnum::class,
        'created_at'     => 'timestamp',
        'updated_at'     => 'timestamp',
        'delivered_date' => 'date',
        'returned_date'  => 'date',
        'invited_date'   => 'date',
    ];

    /**
     * Get the order that the order shipment status belongs to.
     *
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'id_order', 'id_order');
    }
}

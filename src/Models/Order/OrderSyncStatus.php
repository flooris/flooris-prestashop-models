<?php

namespace Flooris\Prestashop\Models\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Enums\OrderSyncStatusEnum;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class OrderSyncStatus
 *
 * @property int    $id_order_sync_status
 * @property int    $id_order
 * @property string $status
 * @property Carbon $date_upd
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderSyncStatus extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_sync_status';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_order_sync_status';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'status'   => OrderSyncStatusEnum::class,
        'date_upd' => 'Carbon',
    ];

    /**
     * Get the order that the order sync status belongs to.
     *
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'id_order', 'id_order');
    }
}

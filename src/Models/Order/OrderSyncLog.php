<?php

namespace Flooris\Prestashop\Models\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Enums\OrderSyncStatusEnum;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class OrderSyncLog
 *
 * @property int    $id
 * @property int    $id_order_sync_status
 * @property string $status
 * @property string $message
 * @property Carbon $date_upd
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderSyncLog extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_sync_log';

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
        'status'   => OrderSyncStatusEnum::class,
        'date_upd' => 'Carbon',
    ];

    /**
     * Get the order sync status that the order sync log belongs to.
     *
     * @return BelongsTo
     */
    public function orderSyncStatus(): BelongsTo
    {
        return $this->belongsTo(OrderSyncStatus::class, 'id_order_sync_status', 'id_order_sync_status');
    }
}

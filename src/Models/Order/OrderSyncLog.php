<?php

namespace Flooris\Prestashop\Models\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
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
    const STATUS_DATA_REQUESTED = 'DATA-REQUESTED';
    const STATUS_DATA_PROVIDED = 'DATA-PROVIDED';
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAILED_XML_INVALID = 'FAILED-XML-INVALID';
    const STATUS_FAILED_XML_INCOMPLETE = 'FAILED-XML-INCOMPLETE';
    const STATUS_FAILED_IMPORT = 'FAILED-IMPORT';
    const STATUS_WONT_BE_IMPORTED = 'WONT-BE-IMPORTED';

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

    /**
     * Get the status attribute with correct enum.
     *
     * @return string
     */
    public function getStatusAttribute(): string
    {
        $labels = [
            self::STATUS_DATA_REQUESTED        => 'DATA-REQUESTED',
            self::STATUS_DATA_PROVIDED         => 'DATA-PROVIDED',
            self::STATUS_SUCCESS               => 'SUCCESS',
            self::STATUS_FAILED_XML_INVALID    => 'FAILED-XML-INVALID',
            self::STATUS_FAILED_XML_INCOMPLETE => 'FAILED-XML-INCOMPLETE',
            self::STATUS_FAILED_IMPORT         => 'FAILED-IMPORT',
            self::STATUS_WONT_BE_IMPORTED      => 'WONT-BE-IMPORTED',
        ];

        return $labels[$this->status] ?? 'Unknown';
    }
}

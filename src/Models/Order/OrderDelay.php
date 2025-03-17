<?php

namespace Flooris\Prestashop\Models\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Delay\Delay;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class OrderDelay
 *
 * @property int     $id_order_detail
 * @property int     $id_delay
 * @property ?Carbon $date_add
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderDelay extends PrestashopModel
{

    public $incrementing = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_delay'; // table doesn't have a primary key set
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = null;
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'date_add' => 'datetime',
    ];

    /**
     * Get the order detail that the order delay belongs to.
     *
     * @return BelongsTo
     */
    public function orderDetail(): BelongsTo
    {
        return $this->belongsTo(OrderDetail::class, 'id_order_detail', 'id_order_detail');
    }

    /**
     * Get the delay that the order delay belongs to.
     *
     * @return BelongsTo
     */
    public function delay(): BelongsTo
    {
        return $this->belongsTo(Delay::class, 'id_delay', 'id_delay');
    }
}

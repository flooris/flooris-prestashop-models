<?php

namespace Flooris\Prestashop\Models\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class OrderHistory
 *
 * @property int    $id_order_history
 * @property int    $id_employee
 * @property int    $id_order
 * @property int    $id_order_state
 * @property Carbon $date_add
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderHistory extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_history';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_order_history';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'date_add' => 'datetime',
    ];

    /**
     * Get the order state that the order history belongs to.
     *
     * @return BelongsTo
     */
    public function orderState(): BelongsTo
    {
        return $this->belongsTo(OrderState::class, 'id_order_state', 'id_order_state');
    }

    /**
     * Get the order that the order history belongs to.
     *
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'id_order', 'id_order');
    }

    /**
     * Get the employee that the order history belongs to.
     *
     * @return BelongsTo
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'id_employee', 'id_employee');
    }
}

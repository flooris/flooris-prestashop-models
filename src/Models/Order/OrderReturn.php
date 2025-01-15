<?php

namespace Flooris\Prestashop\Models\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class OrderReturn
 *
 * @property int     $id_order_return
 * @property int     $id_customer
 * @property int     $id_order
 * @property boolean $state
 * @property string  $question
 * @property Carbon  $date_add
 * @property Carbon  $date_upd
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderReturn extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_return';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_order_return';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'state'    => 'boolean',
        'date_add' => 'datetime',
        'date_upd' => 'datetime',
    ];

    /**
     * Get the customer that the order return belongs to.
     *
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    /**
     * Get the order that the order return belongs to.
     *
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'id_order', 'id_order');
    }
}

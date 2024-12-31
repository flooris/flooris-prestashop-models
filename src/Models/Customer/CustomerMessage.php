<?php

namespace Flooris\Prestashop\Models\Customer;

use Carbon\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class CustomerMessage
 *
 * @property int     $id_customer_message
 * @property int     $id_customer_thread
 * @property int     $id_employee
 * @property string  $message
 * @property string  $file_name
 * @property string  $ip_address
 * @property string  $user_agent
 * @property Carbon  $date_add
 * @property Carbon  $date_upd
 * @property boolean $private
 * @property boolean $read
 *
 * @package Flooris\Prestashop\Models\Customer
 */
class CustomerMessage extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customer_message';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_customer_message';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'date_add' => 'datetime',
        'date_upd' => 'datetime',
        'private'  => 'boolean',
        'read'     => 'boolean',
    ];

    /**
     * Get the customer thread that the customer message belongs to.
     *
     * @return BelongsTo
     */
    public function customerThread(): BelongsTo
    {
        return $this->belongsTo(CustomerThread::class, 'id_customer_thread', 'id_customer_thread');
    }

    /**
     * Get the employee that the customer message belongs to.
     *
     * @return BelongsTo
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'id_employee', 'id_employee');
    }
}

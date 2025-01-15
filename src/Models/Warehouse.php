<?php

namespace Flooris\Prestashop\Models;

use Flooris\Prestashop\Enums\ManagementTypeEnum;
use Flooris\Prestashop\Models\Currency\Currency;
use Flooris\Prestashop\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Warehouse
 *
 * @property int     $id_warehouse
 * @property int     $id_currency
 * @property int     $id_address
 * @property int     $id_employee
 * @property string  $reference
 * @property string  $name
 * @property string  $management_type
 * @property boolean $deleted
 *
 * @package Flooris\Prestashop\Models
 */
class Warehouse extends PrestashopModel
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
    protected $table = 'warehouse';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_warehouse';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'management_type' => ManagementTypeEnum::class,
        'deleted'         => 'boolean',
    ];

    /**
     * Get the currency that the warehouse belongs to.
     *
     * @return BelongsTo
     */
    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'id_currency', 'id_currency');
    }

    /**
     * Get the address that the warehouse belongs to.
     *
     * @return BelongsTo
     */
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'id_address', 'id_address');
    }

    /**
     * Get the employee that the warehouse belongs to.
     *
     * @return BelongsTo
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'id_employee', 'id_employee');
    }
}

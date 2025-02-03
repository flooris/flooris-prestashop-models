<?php

namespace Flooris\Prestashop\Models\Order;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class OrderSlipDetailTax
 *
 * @property int   $id_order_slip_detail
 * @property int   $id_tax
 * @property float $unit_amount
 * @property float $total_amount
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderSlipDetailTax extends PrestashopModel
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false; // the table has no primary key, this may cause problems, but we'll see
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_slip_detail_tax';
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
        'unit_amount'  => 'float',
        'total_amount' => 'float',
    ];
}

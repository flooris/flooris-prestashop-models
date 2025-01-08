<?php

namespace Flooris\Prestashop\Models\Order;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class OrderInvoiceTax
 *
 * @property int    $id_order_invoice
 * @property string $type
 * @property int    $id_tax
 * @property float  $amount
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderInvoiceTax extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_invoice_tax';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = null; // the table has no primary key, this may cause problems, but we'll see

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public $incrementing = false;

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'amount' => 'float',
    ];
}

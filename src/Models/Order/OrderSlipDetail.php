<?php

namespace Flooris\Prestashop\Models\Order;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class OrderSlipDetail
 *
 * @property int    $id_order_slip
 * @property int    $id_order_detail
 * @property int    $product_quantity
 * @property ?float $unit_price_tax_excl
 * @property ?float $unit_price_tax_incl
 * @property ?float $total_price_tax_excl
 * @property ?float $total_price_tax_incl
 * @property ?float $amount_tax_excl
 * @property ?float $amount_tax_incl
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderSlipDetail extends PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_slip_detail';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_order_slip', 'id_order_detail'];
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'unit_price_tax_excl'  => 'float',
        'unit_price_tax_incl'  => 'float',
        'total_price_tax_excl' => 'float',
        'total_price_tax_incl' => 'float',
        'amount_tax_excl'      => 'float',
        'amount_tax_incl'      => 'float',
    ];
}

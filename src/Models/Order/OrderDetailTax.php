<?php

namespace Flooris\Prestashop\Models\Order;

use Flooris\Prestashop\Models\Tax\Tax;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class OrderDetailTax
 *
 * @property int   $id_order_detail
 * @property int   $id_tax
 * @property float $unit_amount
 * @property float $total_amount
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderDetailTax extends PrestashopModel
{

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false; // table doesn't have a primary key set
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_detail_tax';
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
    ];

    /**
     * Get the order detail that the order DetailTax belongs to.
     *
     * @return BelongsTo
     */
    public function orderDetail(): BelongsTo
    {
        return $this->belongsTo(OrderDetail::class, 'id_order_detail', 'id_order_detail');
    }

    /**
     * Get the tax that the order detail tax belongs to.
     *
     * @return BelongsTo
     */
    public function tax(): BelongsTo
    {
        return $this->belongsTo(Tax::class, 'id_tax', 'id_tax');
    }
}

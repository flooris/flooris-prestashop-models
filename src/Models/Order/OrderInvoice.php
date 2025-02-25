<?php

namespace Flooris\Prestashop\Models\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Traits\HasPrestashopModelFactoryTrait;

/**
 * Class OrderInvoice
 *
 * @property int         $id_order_invoice
 * @property int         $id_order
 * @property int         $number
 * @property int         $delivery_number
 * @property string|null $delivery_date
 * @property float       $total_discount_tax_excl
 * @property float       $total_discount_tax_incl
 * @property float       $total_paid_tax_excl
 * @property float       $total_paid_tax_incl
 * @property float       $total_products
 * @property float       $total_products_wt
 * @property float       $total_shipping_tax_excl
 * @property float       $total_shipping_tax_incl
 * @property int         $shipping_tax_computation_method
 * @property float       $total_wrapping_tax_excl
 * @property float       $total_wrapping_tax_incl
 * @property string|null $shop_address
 * @property string|null $invoice_address
 * @property string|null $delivery_address
 * @property string|null $company_address
 * @property string|null $note
 * @property Carbon      $date_add
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderInvoice extends PrestashopModel
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
    protected $table = 'order_invoice';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_order_invoice';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'date_add' => 'datetime',
    ];
    /**
     * Get the order the invoice belongs to.
     *
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'id_order', 'id_order');
    }
}

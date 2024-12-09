<?php

namespace Flooris\Prestashop\Models\Order;

use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
 * @property string      $date_add
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderInvoice extends PrestashopModel
{
    use HasFactory;

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
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

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

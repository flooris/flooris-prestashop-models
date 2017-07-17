<?php

namespace Flooris\Prestashop\Models\Order;

use Flooris\Prestashop\Models\PrestashopModel;

class OrderInvoice extends PrestashopModel
{
    public $timestamps = false;
    protected $table = 'order_invoice';
    protected $primaryKey = 'id_order_invoice';

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order', 'id_order');
    }
}

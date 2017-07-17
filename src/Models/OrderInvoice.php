<?php

namespace Flooris\Prestashop\Models;

use Illuminate\Database\Eloquent\Model;

class OrderInvoice extends Model
{
    public $timestamps = false;
    protected $table = 'order_invoice';
    protected $primaryKey = 'id_order_invoice';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

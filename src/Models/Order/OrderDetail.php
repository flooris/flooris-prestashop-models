<?php

namespace Flooris\Prestashop\Models\Order;

use Flooris\Prestashop\Models\PrestashopModel;

class OrderDetail extends PrestashopModel
{

    public $timestamps = false;
    protected $primaryKey = 'id_order_detail';
    protected $table = 'order_detail';

    public function getWeightAttribute()
    {
        return ($this->product_quantity * $this->product_weight);
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order', 'id_order');
    }

}

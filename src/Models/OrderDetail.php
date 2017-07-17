<?php

namespace Flooris\Prestashop\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{

    public $timestamps = false;
    protected $primaryKey = 'id_order_detail';
    protected $table = 'order_detail';

    public function getWeightAttribute()
    {
        return ($this->product_quantity * $this->product_weight);
    }

}

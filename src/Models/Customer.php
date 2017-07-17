<?php

namespace Flooris\Prestashop\Models;

class Customer extends PrestashopModel
{

    public $primaryKey = 'id_customer';
    protected $table = 'customer';

    public function orders()
    {
        return $this->hasMany(Order::class, 'id_customer');
    }

}

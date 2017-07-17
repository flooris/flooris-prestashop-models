<?php

namespace Flooris\Prestashop\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    public $primaryKey = 'id_customer';
    public $timestamps = false;
    protected $table = 'customer';

    public function orders()
    {
        return $this->hasMany(Order::class, 'id_customer');
    }

}

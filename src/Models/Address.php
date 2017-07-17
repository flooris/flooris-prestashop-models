<?php

namespace Flooris\Prestashop\Models;

/**
 * Class Address
 *
 * @package App\Models
 * @mixin \Eloquent
 */
class Address extends PrestashopModel
{

    public $primaryKey = 'id_address';
    public $table = 'address';

    public function country()
    {
        return $this->belongsTo(Country::class, 'id_country');
    }
}

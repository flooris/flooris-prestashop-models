<?php

namespace Flooris\Prestashop\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 *
 * @package App\Models
 * @mixin \Eloquent
 */
class Address extends Model
{

    public $primaryKey = 'id_address';
    public $timestamps = false;
    public $table = 'address';

    public function country()
    {
        return $this->belongsTo(Country::class, 'id_country');
    }
}

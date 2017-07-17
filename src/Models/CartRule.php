<?php

namespace Flooris\Prestashop\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CartRule
 *
 * @package App\Models
 * @mixin \Eloquent
 */
class CartRule extends Model
{

    protected $primaryKey = 'id_cart_rule';
    protected $table = 'cart_rule';

}

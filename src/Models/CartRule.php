<?php

namespace Flooris\Prestashop\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CartRule
 *
 * @package Flooris\Prestashop\Models
 */
class CartRule extends PrestashopModel
{
    /**
     * The table associated with the model
     *
     * @var string
     */
    protected $table = 'cart_rule';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_cart_rule';
}

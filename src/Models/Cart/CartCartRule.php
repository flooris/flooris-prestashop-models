<?php

namespace Flooris\Prestashop\Models\Cart;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class CartCartRule
 *
 * @property int $id_cart
 * @property int $id_cart_rule
 *
 * @package Flooris\Prestashop\Models\Cart
 */
class CartCartRule extends PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cart_cart_rule';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_cart', 'id_cart_rule'];

}

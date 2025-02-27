<?php

namespace Flooris\Prestashop\Models\Cart;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class CartRuleShop
 *
 * @property int $id_cart_rule
 * @property int $id_shop
 *
 * @package Flooris\Prestashop\Models\Cart
 */
class CartRuleShop extends PrestashopModel
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
    protected $table = 'cart_rule_shop';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_cart_rule', 'id_shop'];

}

<?php

namespace Flooris\Prestashop\Models\Cart;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class CartRuleCombination
 *
 * @property int $id_cart_rule1
 * @property int $id_cart_rule2
 *
 * @package Flooris\Prestashop\Models\Cart
 */
class CartRuleCombination extends PrestashopModel
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
    protected $table = 'cart_rule_combination';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_cart_rule1', 'id_cart_rule2'];

}

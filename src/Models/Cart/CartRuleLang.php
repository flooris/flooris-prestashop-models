<?php

namespace Flooris\Prestashop\Models\Cart;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class CartRuleLang
 *
 * @property int $id_cart_rule
 * @property int $id_lang
 *
 * @package Flooris\Prestashop\Models\Cart
 */
class CartRuleLang extends PrestashopModel
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
    protected $table = 'cart_rule_lang';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_cart_rule', 'id_lang'];

}

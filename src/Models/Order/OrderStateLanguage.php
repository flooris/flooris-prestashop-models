<?php

namespace Flooris\Prestashop\Models\Order;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class OrderStateLanguage
 *
 * @property int    $id_order_state
 * @property int    $id_lang
 * @property string $name
 * @property string $template
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderStateLanguage extends PrestashopModel
{
    use CompositeKeyModelTrait;

    protected $table = 'order_state_lang';

    protected $primaryKey = ['id_order_state', 'id_lang'];
    public $incrementing = false;

}

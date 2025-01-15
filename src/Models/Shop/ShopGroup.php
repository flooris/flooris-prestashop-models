<?php

namespace Flooris\Prestashop\Models\Shop;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class ShopGroup
 *
 * @property int     $id_shop_group
 * @property string  $name
 * @property boolean $share_customer
 * @property boolean $share_order
 * @property boolean $share_stock
 * @property boolean $active
 * @property boolean $deleted
 *
 * @package Flooris\Prestashop\Models\Shop
 */
class ShopGroup extends PrestashopModel
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shop_group';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_shop_group';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'share_customer' => 'boolean',
        'share_order'    => 'boolean',
        'share_stock'    => 'boolean',
        'active'         => 'boolean',
        'deleted'        => 'boolean',
    ];
}

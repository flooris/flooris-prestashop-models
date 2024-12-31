<?php

namespace Flooris\Prestashop\Models\Configuration;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Shop\ShopGroup;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Configuration
 *
 * @property int     $id_configuration
 * @property ?int    $id_shop_group
 * @property ?int    $id_shop
 * @property string  $name
 * @property ?string $value
 * @property Carbon  $date_add
 * @property Carbon  $date_upd
 *
 * @package Flooris\Prestashop\Models\Configuration
 */
class Configuration extends PrestashopModel
{
    const CREATED_AT = 'date_add';
    const UPDATED_AT = 'date_upd';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'configuration';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_configuration';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'date_add' => 'datetime',
        'date_upd' => 'datetime',
    ];

    /**
     * Get the shop that the configuration belongs to.
     *
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id_shop', 'id_shop');
    }

    /**
     * Get the shop group that the configuration belongs to.
     *
     * @return BelongsTo
     */
    public function shopGroup(): BelongsTo
    {
        return $this->belongsTo(ShopGroup::class, 'id_shop_group', 'id_shop_group');
    }
}

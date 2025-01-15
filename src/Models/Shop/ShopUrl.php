<?php

namespace Flooris\Prestashop\Models\Shop;

use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int    $id_shop_url
 * @property int    $id_shop
 * @property string $domain
 * @property string $domain_ssl
 * @property string $physical_uri
 * @property string $virtual_uri
 * @property int    $main
 * @property int    $active
 */
class ShopUrl extends PrestashopModel
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
    protected $table = 'shop_url';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_shop_url';

    /**
     * Get the shop that the shop url belongs to.
     *
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id_shop', 'id_shop');
    }
}

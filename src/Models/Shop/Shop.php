<?php

namespace Flooris\Prestashop\Models\Shop;

use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int    $id_shop
 * @property int    $id_shop_group
 * @property string $name
 * @property int    $id_category
 * @property int    $id_theme
 * @property int    $active
 * @property int    $deleted
 */
class Shop extends PrestashopModel
{
    protected $table = 'shop';
    protected $primaryKey = 'id_shop';

    public function shopUrl(): HasOne
    {
        return $this->hasOne(ShopUrl::class, 'id_shop');
    }

    public function alternateLanguages(): HasOne
    {
        return $this->hasOne(ShopAlternateLanguages::class, 'id_shop');
    }
}

<?php

namespace Flooris\Prestashop\Models\Shop;

use Flooris\Prestashop\Models\PrestashopModel;

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
    protected $table = 'shop_url';
}

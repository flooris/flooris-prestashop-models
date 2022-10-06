<?php

namespace Flooris\Prestashop\Models\Shop;

use Flooris\Prestashop\Models\Configuration;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Shop extends PrestashopModel
{
    protected $table = 'shop';
    protected $primaryKey = 'id_shop';

    public function shopUrl(): HasOne
    {
        return $this->hasOne(ShopUrl::class, 'id_shop');
    }
}

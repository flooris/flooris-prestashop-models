<?php

namespace Flooris\Prestashop\Models\Image;

use Illuminate\Support\Str;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Image extends PrestashopModel
{
    const CART_DEFAULT = 'cart_default';
    const SMALL_DEFAULT = 'small_default';
    const MEDIUM_DEFAULT = 'medium_default';
    const HOME_DEFAULT = 'home_default';
    const LARGE_DEFAULT = 'large_default';
    const CATEGORY_DEFAULT = 'category_default';
    const STORES_DEFAULT = 'stores_default';

    protected $table = 'image';

    protected $primaryKey = 'id_image';

    protected $casts = [
        'end_date' => 'date',
    ];

    public function imageurl($size = self::MEDIUM_DEFAULT, $name = null)
    {
        if (! $name) {
            $name = 'unnamed';
        }

        $shops = $this->shops;

        if($shops->count() < 1){
            $shops = Shop::all();
        }

        $shopUrl = $shops->first()->shopUrl->domain;

        $imageUrl = '://%s/%d-%s/%s.jpg';

        return sprintf($imageUrl, $shopUrl, $this->id_image, $size, $name);
    }

    public function shops(): HasManyThrough
    {
        return $this->hasManyThrough(Shop::class, ImageShop::class, 'id_image', 'id_shop', 'id_image', 'id_shop');
    }
}

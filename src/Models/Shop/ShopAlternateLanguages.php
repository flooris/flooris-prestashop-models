<?php

namespace Flooris\Prestashop\Models\Shop;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class ShopAlternateLanguages
 *
 * @property int    $id_shop
 * @property int    $id_lang
 * @property string $language_code
 *
 * @package Flooris\Prestashop\Models\Shop
 */
class ShopAlternateLanguages extends PrestashopModel
{

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false; // table doesn't have a primary key set
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shop_alternate_languages';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = null;
}

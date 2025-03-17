<?php

namespace Flooris\Prestashop\Models;

use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class LangShop
 *
 * @property int $id_lang
 * @property int $id_shop
 *
 * @package Flooris\Prestashop\Models
 */
class LangShop extends PrestashopModel
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
    protected $table = 'lang_shop';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_lang', 'id_shop'];
}

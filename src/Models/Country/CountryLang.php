<?php

namespace Flooris\Prestashop\Models\Country;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class CountryLang
 *
 * @property int    $id_country
 * @property int    $id_lang
 * @property string $name
 *
 * @package Flooris\Prestashop\Models\Country
 */
class CountryLang extends PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'country_lang';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_country', 'id_lang'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public $incrementing = false;

}

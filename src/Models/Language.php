<?php

namespace Flooris\Prestashop\Models;

/**
 * Class Language
 *
 * @property int     $id_lang
 * @property string  $name
 * @property boolean $active
 * @property string  $iso_code
 * @property string  $language_code
 * @property string  $date_format_lite
 * @property string  $date_format_full
 * @property boolean $is_rtl
 *
 * @package Flooris\Prestashop\Models
 */
class Language extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lang';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_lang';

}

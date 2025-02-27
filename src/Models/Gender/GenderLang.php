<?php

namespace Flooris\Prestashop\Models\Gender;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class GenderLang
 *
 * @property int    $id_gender
 * @property int    $id_lang
 * @property string $name
 *
 * @package Flooris\Prestashop\Models\Gender
 */
class GenderLang extends PrestashopModel
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
    protected $table = 'gender_lang';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_gender', 'id_lang'];
}

<?php

namespace Flooris\Prestashop\Models\Delay;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class DelayLang
 *
 * @property int    $id_delay
 * @property int    $id_lang
 * @property string $description
 *
 * @package Flooris\Prestashop\Models\Delay
 */
class DelayLang extends PrestashopModel
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
    protected $table = 'delay_lang';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_delay', 'id_lang'];

}

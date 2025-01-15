<?php

namespace Flooris\Prestashop\Models\Risk;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class RiskLang
 *
 * @property int    $id_risk
 * @property int    $id_lang
 * @property string $name
 *
 * @package Flooris\Prestashop\Models\Risk
 */
class RiskLang extends PrestashopModel
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
    protected $table = 'risk_lang';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_risk', 'id_lang'];
}

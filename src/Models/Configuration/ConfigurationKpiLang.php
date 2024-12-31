<?php

namespace Flooris\Prestashop\Models\Configuration;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class ConfigurationKpiLang
 *
 * @property int     $id_configuration_kpi
 * @property int     $id_lang
 * @property ?string $value
 * @property ?Carbon $date_upd
 *
 * @package Flooris\Prestashop\Models\Configuration
 */
class ConfigurationKpiLang extends PrestashopModel
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
    protected $table = 'configuration_kpi_lang';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_configuration_kpi', 'id_lang'];
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'date_upd' => 'Carbon',
    ];
}

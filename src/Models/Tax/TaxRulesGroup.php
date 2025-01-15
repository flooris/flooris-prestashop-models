<?php

namespace Flooris\Prestashop\Models\Tax;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class TaxRulesGroup
 *
 * @property int         $id_tax_rules_group
 * @property string      $name
 * @property boolean     $active
 * @property boolean     $deleted
 * @property Carbon|null $date_add
 * @property Carbon|null $date_upd
 *
 * @package Flooris\Prestashop\Models\Tax
 */
class TaxRulesGroup extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tax_rules_group';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_tax_rules_group';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'active'    => 'boolean',
        'deleted'   => 'boolean',
        'date_add'  => 'datetime',
        'date_upd ' => 'datetime',
    ];
}

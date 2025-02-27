<?php

namespace Flooris\Prestashop\Models\Carrier;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class CarrierTaxRulesGroupShop
 *
 * @property int $id_carrier
 * @property int $id_tax_rules_group
 * @property int $id_shop
 *
 * @package Flooris\Prestashop\Models\Carrier
 */
class CarrierTaxRulesGroupShop extends PrestashopModel
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
    protected $table = 'carrier_tax_rules_group_shop';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_carrier', 'id_tax_rules_group', 'id_shop'];

}

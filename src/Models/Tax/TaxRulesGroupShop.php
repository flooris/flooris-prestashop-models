<?php


namespace Flooris\Prestashop\Models\Tax;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class TaxRulesGroupShop
 *
 * @property int $id_tax_rules_group
 * @property int $id_shop
 *
 * @package Flooris\Prestashop\Models\Tax
 */
class TaxRulesGroupShop extends PrestashopModel
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
    protected $table = 'tax_rules_group_shop';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_tax_rules_group', 'id_shop'];
}

<?php

namespace Flooris\Prestashop\Models\Tax;

use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class TaxRule
 *
 * @property int    $id_tax_rule
 * @property int    $id_tax_rules_group
 * @property int    $id_country
 * @property int    $id_state
 * @property string $zipcode_from
 * @property string $zipcode_to
 * @property int    $id_tax
 * @property int    behavior
 * @property string description
 *
 * @package Flooris\Prestashop\Models\Tax
 */
class TaxRule extends PrestashopModel
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tax_rule';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_tax_rule';

    /**
     * Get the group the attribute belongs to.
     *
     * @return BelongsTo
     */
    public function taxRulesGroup(): BelongsTo
    {
        return $this->belongsTo(TaxRulesGroup::class, 'id_tax_rules_group');
    }

}

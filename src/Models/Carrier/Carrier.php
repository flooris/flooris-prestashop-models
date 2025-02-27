<?php

namespace Flooris\Prestashop\Models\Carrier;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Tax\TaxRulesGroup;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Carrier
 *
 * @property int     $id_carrier
 * @property int     $id_reference
 * @property ?int    $id_tax_rules_group
 * @property string  $name
 * @property ?string $url
 * @property boolean $active
 * @property boolean $deleted
 * @property boolean $shipping_handling
 * @property boolean $range_behavior
 * @property boolean $is_module
 * @property boolean $is_free
 * @property boolean $shipping_external
 * @property boolean $need_range
 * @property ?string $external_module_name
 * @property int     $shipping_method
 * @property int     $position
 * @property ?int    $max_width
 * @property ?int    $max_height
 * @property ?int    $max_depth
 * @property ?float  $max_weight
 * @property ?int    $grade
 *
 * @package Flooris\Prestashop\Models\Carrier
 */
class Carrier extends PrestashopModel
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
    protected $table = 'carrier';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_carrier';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'active'            => 'boolean',
        'deleted'           => 'boolean',
        'shipping_handling' => 'boolean',
        'range_behavior'    => 'boolean',
        'is_module'         => 'boolean',
        'is_free'           => 'boolean',
        'shipping_external' => 'boolean',
        'need_range'        => 'boolean',
        'max_weight'        => 'float',
    ];

    /**
     * Get the tax rules group that the carrier belongs to.
     *
     * @return ?BelongsTo
     */
    public function taxRulesGroup(): ?BelongsTo
    {
        return $this->belongsTo(TaxRulesGroup::class, 'id_tax_rules_group', 'id_tax_rules_group');
    }
}

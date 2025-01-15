<?php

namespace Flooris\Prestashop\Models\SpecificPrice;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Group\Group;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Country\Country;
use Flooris\Prestashop\Models\Currency\Currency;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Enums\SpecificPriceRuleReductionTypeEnum;

/**
 * Class SpecificPriceRule
 *
 * @property int     $id_specific_price_rule
 * @property string  $name
 * @property int     $id_shop
 * @property int     $id_currency
 * @property int     $id_country
 * @property int     $id_group
 * @property int     $from_quantity
 * @property float   $price
 * @property float   $reduction
 * @property boolean $reduction_tax
 * @property string  $reduction_type
 * @property Carbon  $from
 * @property Carbon  $to
 *
 * @package Flooris\Prestashop\Models\SpecificPrice
 */
class SpecificPriceRule extends PrestashopModel
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
    protected $table = 'specific_price_rule';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_specific_price_rule';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'price'          => 'float',
        'reduction'      => 'float',
        'reduction_tax'  => 'boolean',
        'reduction_type' => SpecificPriceRuleReductionTypeEnum::class,
        'from'           => 'datetime',
        'to'             => 'datetime',
    ];

    /**
     * Get the shop that the specific price rule belongs to.
     *
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id_shop', 'id_shop');
    }

    /**
     * Get the currency that the specific price rule belongs to.
     *
     * @return BelongsTo
     */
    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'id_currency', 'id_currency');
    }

    /**
     * Get the country that the specific price rule belongs to.
     *
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'id_country', 'id_country');
    }

    /**
     * Get the group that the specific price rule belongs to.
     *
     * @return BelongsTo
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'id_group', 'id_group');
    }
}

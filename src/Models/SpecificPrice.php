<?php

namespace Flooris\Prestashop\Models;


use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SpecificPrice
 *
 * @package Flooris\Prestashop\Models
 * @property int         $id_specific_price
 * @property int         $id_specific_price_rule
 * @property int         $id_cart
 * @property int         $id_product
 * @property int         $id_shop
 * @property int         $id_shop_group
 * @property int         $id_currency
 * @property int         $id_country
 * @property int         $id_group
 * @property int         $id_customer
 * @property int         $id_product_attribute
 * @property float       $price
 * @property int         $from_quantity
 * @property float       $reduction
 * @property int         $reduction_tax
 * @property string      $reduction_type
 * @property Carbon|null $from
 * @property Carbon|null $to
 */
class SpecificPrice extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'specific_price';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_specific_price';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that should be cast.
     * @var array
     */
    protected $casts = [
        'from' => 'datetime',
        'to' => 'datetime'
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'id_specific_price_rule' => 0,
        'price'                  => 0,
        'id_shop'                => 0,
        'id_cart'                => 0,
        'id_shop_group'          => 0,
        'id_currency'            => 0,
        'id_country'             => 0,
        'id_group'               => 0,
        'id_customer'            => 0,
        'id_product_attribute'   => 0,
        'from_quantity'          => 1,
        'reduction_tax'          => 1,
    ];
}

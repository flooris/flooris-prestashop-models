<?php

namespace Flooris\Prestashop\Models;


/**
 * Class SpecificPrice
 *
 * @package Flooris\Prestashop\Models
 * @property int                             $id_specific_price
 * @property int                             $id_specific_price_rule
 * @property int                             $id_cart
 * @property int                             $id_product
 * @property int                             $id_shop
 * @property int                             $id_shop_group
 * @property int                             $id_currency
 * @property int                             $id_country
 * @property int                             $id_group
 * @property int                             $id_customer
 * @property int                             $id_product_attribute
 * @property float                           $price
 * @property int                             $from_quantity
 * @property float                           $reduction
 * @property int                             $reduction_tax
 * @property string                          $reduction_type
 * @property \Illuminate\Support\Carbon|null $from
 * @property \Illuminate\Support\Carbon|null $to
 */
class SpecificPrice extends PrestashopModel
{
    public $timestamps = false;

    protected $primaryKey = 'id_specific_price';

    protected $table = 'specific_price';

    protected $dates = [
        'from',
        'to',
    ];

    protected $guarded = [];

    // Set default values for attributes that are rarely filled.
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

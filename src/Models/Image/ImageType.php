<?php

namespace Flooris\Prestashop\Models\Image;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class ImageType
 *
 * @property int     $id_image_type
 * @property string  $name
 * @property int     $width
 * @property int     $height
 * @property boolean $products
 * @property boolean $categories
 * @property boolean $manufacturers
 * @property boolean $suppliers
 * @property boolean $scenes
 * @property boolean $stores
 *
 * @package Flooris\Prestashop\Models\Image
 */
class ImageType extends PrestashopModel
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
    protected $table = 'image_type';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_image_type';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'products'      => 'boolean',
        'categories'    => 'boolean',
        'manufacturers' => 'boolean',
        'suppliers'     => 'boolean',
        'scenes'        => 'boolean',
        'stores'        => 'boolean',
    ];
}

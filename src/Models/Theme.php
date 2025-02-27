<?php

namespace Flooris\Prestashop\Models;

/**
 * Class Theme
 *
 * @property int     $id_theme
 * @property string  $name
 * @property string  $directory
 * @property boolean $responsive
 * @property boolean $default_left_column
 * @property boolean $default_right_column
 * @property int     $product_per_page
 *
 * @package Flooris\Prestashop\Models
 */
class Theme extends PrestashopModel
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
    protected $table = 'theme';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_theme';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'responsive'           => 'boolean',
        'default_left_column'  => 'boolean',
        'default_right_column' => 'boolean',
    ];
}

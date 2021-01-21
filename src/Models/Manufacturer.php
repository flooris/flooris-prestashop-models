<?php

namespace Flooris\Prestashop\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Manufacturer
 *
 * @package Flooris\Prestashop\Models
 */
class Manufacturer extends PrestashopModel
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'manufacturer';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_manufacturer';
}

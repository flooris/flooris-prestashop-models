<?php

namespace Flooris\Prestashop\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Country
 *
 * @package Flooris\Prestashop\Models
 */
class Country extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'country';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_country';
}

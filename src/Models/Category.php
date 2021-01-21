<?php

namespace Flooris\Prestashop\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Category
 *
 * @package Flooris\Prestashop\Models
 */
class Category extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_category';
}

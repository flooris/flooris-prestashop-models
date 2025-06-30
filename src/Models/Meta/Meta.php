<?php

namespace Flooris\Prestashop\Models\Meta;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Meta
 *
 * @property int     $id_meta
 * @property string  $page
 * @property boolean $configurable
 *
 * @package Flooris\Prestashop\Models\Meta\Meta
 */
class Meta extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ps_meta';
}

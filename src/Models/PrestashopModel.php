<?php

namespace Flooris\Prestashop\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PrestashopModel
 *
 * @package Flooris\Prestashop\Models
 */
abstract class PrestashopModel extends Model
{
    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'date_add';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'date_upd';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * PrestashopModel constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->setConnection(config('prestashop.db_connection'));
    }
}

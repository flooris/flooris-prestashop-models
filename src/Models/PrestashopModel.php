<?php

namespace Flooris\Prestashop\Models;

use Illuminate\Database\Eloquent\Model;

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

}

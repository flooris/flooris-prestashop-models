<?php

namespace Flooris\Prestashop\Models\Feature;

use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feature extends PrestashopModel
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'feature';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_feature';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

}

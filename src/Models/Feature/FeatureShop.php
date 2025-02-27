<?php

namespace Flooris\Prestashop\Models\Feature;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class FeatureShop
 *
 * @property int $id_feature
 * @property int $id_shop
 *
 * @package Flooris\Prestashop\Models\Feature
 */
class FeatureShop extends PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'feature_shop';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_feature', 'id_shop'];
}

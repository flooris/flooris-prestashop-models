<?php

namespace Flooris\Prestashop\Models\Attribute;

use Flooris\Prestashop\Models\PrestashopModel;

class Attribute extends PrestashopModel
{

    public $timestamps = false;
    protected $table = 'attribute';
    protected $primaryKey = 'id_attribute';

    public function group()
    {
        return $this->belongsTo(AttributeGroup::class, 'id_attribute_group', 'id_attribute_group');
    }

}

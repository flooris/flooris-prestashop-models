<?php

namespace Flooris\Prestashop\Models\Attribute;

use Flooris\Prestashop\Models\PrestashopModel;

class AttributeGroup extends PrestashopModel
{

    public $timestamps = false;
    protected $table = 'attribute_group';
    protected $primaryKey = 'id_attribute_group';

}

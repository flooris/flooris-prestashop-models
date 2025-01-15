<?php

namespace Flooris\Prestashop\Models\Employee;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class EmployeeShop
 *
 * @property int $id_employee
 * @property int $id_shop
 *
 * @package Flooris\Prestashop\Models\Employee
 */
class EmployeeShop extends PrestashopModel
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
    protected $table = 'employee_shop';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_employee', 'id_shop'];
}

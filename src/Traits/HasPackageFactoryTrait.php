<?php

namespace Flooris\Prestashop\Traits;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait HasPackageFactoryTrait
{
    use HasFactory;

    protected static function newFactory()
    {
        $package   = Str::before(get_parent_class(get_called_class()), 'Models\\');
        $modelName = Str::after(get_parent_class(get_called_class()), 'Models\\');
        $path      = $package . 'Database\\Factories\\' . $modelName . 'Factory';

        return $path::new();
    }
}

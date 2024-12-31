<?php

namespace Flooris\Prestashop\Traits;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait HasPrestashopModelFactoryTrait
{
    use HasFactory;

    protected static function newFactory()
    {
        $package   = Str::before(get_called_class(), 'Models\\');
        $modelName = Str::after(get_called_class(), 'Models\\');
        $path      = $package . 'Database\\Factories\\' . $modelName . 'Factory';

        return $path::new();
    }
}

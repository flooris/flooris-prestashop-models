<?php

namespace Flooris\Prestashop\Traits;

use Flooris\Prestashop\Models\Language;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait Translatable
{
    abstract public function translations(): HasMany;

    public function translation(Language $language)
    {
        return $this->translations->where('id_lang', $language->id_lang)->first();
    }
}

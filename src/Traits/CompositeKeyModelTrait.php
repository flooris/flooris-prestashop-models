<?php

namespace Flooris\Prestashop\Traits;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

trait CompositeKeyModelTrait
{
    /**
     * Qualify the given column name by the model's table.
     *
     * @param array|string $columns
     * @return string
     */
    public function qualifyColumn($columns): string
    {
        $column = '';
        if (is_array($columns)) {
            $column = $columns[0];
        }

        if (Str::contains($column, '.')) {
            return $column;
        }

        if (strlen($column) === 0) {
            $column = $columns;
        }

        return $this->getTable() . '.' . $column;
    }

    /**
     * Set the keys for a save update query.
     *
     * @param Builder $query
     * @return Builder
     */
    protected function setKeysForSaveQuery($query): Builder
    {
        $keys = $this->getKeyName();
        if (! is_array($keys)) {
            return parent::setKeysForSaveQuery($query);
        }

        foreach ($keys as $keyName) {
            $query->where($keyName, '=', $this->getKeyForSaveQuery($keyName));
        }

        return $query;
    }

    /**
     * Get the primary key value for a save query.
     *
     * @param mixed $keyName
     * @return mixed
     */
    protected function getKeyForSaveQuery($keyName = null)
    {
        if (is_null($keyName)) {
            $keyName = $this->getKeyName();
        }

        if (isset($this->original[$keyName])) {
            return $this->original[$keyName];
        }

        return $this->getAttribute($keyName);
    }
}

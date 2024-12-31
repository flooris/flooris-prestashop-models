<?php

namespace Flooris\Prestashop\Models\Tag;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Tag
 *
 * @property int    $id_tag
 * @property int    $id_lang
 * @property string $name
 *
 * @package Flooris\Prestashop\Models\Tag
 */
class Tag extends PrestashopModel
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tag';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_tag';

    /**
     * Get the language that the tag belongs to.
     *
     * @return BelongsTo
     */
    public function lang(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'id_lang', 'id_lang');
    }
}

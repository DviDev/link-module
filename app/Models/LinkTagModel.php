<?php

namespace Modules\Link\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Contracts\BaseModel;
use Modules\Base\Factories\BaseFactory;
use Modules\Link\Entities\LinkTag\LinkTagEntityModel;
use Modules\Link\Entities\LinkTag\LinkTagProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read LinkModel $link
 *
 * @method LinkTagEntityModel toEntity()
 */
class LinkTagModel extends BaseModel
{
    use HasFactory;
    use LinkTagProps;

    public function modelEntity(): string
    {
        return LinkTagEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = LinkTagModel::class;
        };
    }

    public static function table($alias = null): string
    {
        return self::dbTable('link_tags', $alias);
    }

    public function link(): BelongsTo
    {
        return $this->belongsTo(LinkModel::class, 'link_id');
    }
}

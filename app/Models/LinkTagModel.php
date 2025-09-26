<?php

declare(strict_types=1);

namespace Modules\Link\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Contracts\BaseModel;
use Modules\Base\Contracts\BaseFactory;
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
final class LinkTagModel extends BaseModel
{
    use LinkTagProps;

    public static function table($alias = null): string
    {
        return self::dbTable('link_tags', $alias);
    }

    public function modelEntity(): string
    {
        return LinkTagEntityModel::class;
    }

    public function link(): BelongsTo
    {
        return $this->belongsTo(LinkModel::class, 'link_id');
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = LinkTagModel::class;
        };
    }
}

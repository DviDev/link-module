<?php

namespace Modules\Link\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Link\Database\Factories\LinkTagFactory;
use Modules\Link\Entities\LinkTag\LinkTagEntityModel;
use Modules\Link\Entities\LinkTag\LinkTagProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method LinkTagEntityModel toEntity()
 * @method static LinkTagFactory factory()
 */
class LinkTagModel extends BaseModel
{
    use HasFactory;
    use LinkTagProps;

    public function modelEntity(): string
    {
        return LinkTagEntityModel::class;
    }

    protected static function newFactory(): LinkTagFactory
    {
        return new LinkTagFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('link_tags', $alias);
    }
}

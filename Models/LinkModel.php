<?php

namespace Modules\Link\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Link\Database\Factories\LinkFactory;
use Modules\Link\Entities\Link\LinkEntityModel;
use Modules\Link\Entities\Link\LinkProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method LinkEntityModel toEntity()
 * @method static LinkFactory factory()
 */
class LinkModel extends BaseModel
{
    use HasFactory;
    use LinkProps;

    public function modelEntity(): string
    {
        return LinkEntityModel::class;
    }

    protected static function newFactory(): LinkFactory
    {
        return new LinkFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('links', $alias);
    }
}

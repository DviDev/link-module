<?php

namespace Modules\Link\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Base\Models\BaseModel;
use Modules\Link\Database\Factories\LinkCommentFactory;
use Modules\Link\Entities\LinkComment\LinkCommentEntityModel;
use Modules\Link\Entities\LinkComment\LinkCommentProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method LinkCommentEntityModel toEntity()
 * @method static LinkCommentFactory factory()
 */
class LinkCommentModel extends BaseModel
{
    use HasFactory;
    use LinkCommentProps;
    use SoftDeletes;

    public function modelEntity(): string
    {
        return LinkCommentEntityModel::class;
    }

    protected static function newFactory(): LinkCommentFactory
    {
        return new LinkCommentFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('link_comments', $alias);
    }
}

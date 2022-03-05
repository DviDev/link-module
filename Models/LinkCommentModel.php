<?php

namespace Modules\Url\Models;

use Modules\Base\Models\BaseModel;
use Modules\Url\Entities\LinkCommentEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method LinkCommentEntityModel toEntity()
 */
class LinkCommentModel extends BaseModel
{
    function modelEntity()
    {
        return LinkCommentEntityModel::class;
    }
}

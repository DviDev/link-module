<?php

namespace Modules\Link\Models;

use Modules\Base\Models\BaseModel;
use Modules\Link\Entities\LinkCommentEntityModel;

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

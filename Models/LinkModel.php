<?php

namespace Modules\Url\Models;

use Modules\Base\Models\BaseModel;
use Modules\Url\Entities\LinkEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method LinkEntityModel toEntity()
 */
class LinkModel extends BaseModel
{
    function modelEntity()
    {
        return LinkEntityModel::class;
    }
}

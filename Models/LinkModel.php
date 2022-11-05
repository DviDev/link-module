<?php

namespace Modules\Link\Models;

use Modules\Base\Models\BaseModel;
use Modules\Link\Entities\LinkEntityModel;

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

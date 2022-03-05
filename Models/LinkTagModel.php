<?php

namespace Modules\Url\Models;

use Modules\Base\Models\BaseModel;
use Modules\Url\Entities\LinkTagEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method LinkTagEntityModel toEntity()
 */
class LinkTagModel extends BaseModel
{
    function modelEntity()
    {
        return LinkTagEntityModel::class;
    }
}

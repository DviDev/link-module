<?php

namespace Modules\Link\Entities\LinkComment;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Link\Models\LinkCommentModel;
use Modules\Link\Repositories\LinkCommentRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read LinkCommentModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method LinkCommentRepository repository()
 */
class LinkCommentEntityModel extends BaseEntityModel
{
    use LinkCommentProps;

    protected function repositoryClass(): string
    {
        return LinkCommentRepository::class;
    }
}

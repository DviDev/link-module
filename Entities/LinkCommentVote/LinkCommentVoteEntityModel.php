<?php

namespace Modules\Link\Entities\LinkCommentVote;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Link\Entities\LinkCommentVote\LinkCommentVoteProps;
use Modules\Link\Repositories\LinkCommentVolteRepository;
use Modules\Link\Models\LinkCommentVoteModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read LinkCommentVoteModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method LinkCommentVolteRepository repository()
 */
class LinkCommentVoteEntityModel extends BaseEntityModel
{
    use LinkCommentVoteProps;

    protected function repositoryClass(): string
    {
        return LinkCommentVolteRepository::class;
    }
}

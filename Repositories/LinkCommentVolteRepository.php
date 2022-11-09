<?php

namespace Modules\Link\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Link\Entities\LinkCommentVote\LinkCommentVoteEntityModel;
use Modules\Link\Models\LinkCommentVoteModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method LinkCommentVoteModel model()
 * @method LinkCommentVoteEntityModel find($id)
 * @method LinkCommentVoteModel first()
 * @method LinkCommentVoteModel findOrNew($id)
 * @method LinkCommentVoteModel firstOrNew($query)
 * @method LinkCommentVoteEntityModel findOrFail($id)
 */
class LinkCommentVolteRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return LinkCommentVoteModel::class;
    }
}

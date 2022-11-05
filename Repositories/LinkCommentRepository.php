<?php

namespace Modules\Link\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Link\Entities\LinkComment\LinkCommentEntityModel;
use Modules\Link\Models\LinkCommentModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method LinkCommentModel model()
 * @method LinkCommentEntityModel find($id)
 * @method LinkCommentModel first()
 * @method LinkCommentModel findOrNew($id)
 * @method LinkCommentModel firstOrNew($query)
 * @method LinkCommentEntityModel findOrFail($id)
 */
class LinkCommentRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return LinkCommentModel::class;
    }
}

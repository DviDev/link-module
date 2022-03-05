<?php

namespace Modules\Url\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Url\Entities\LinkCommentEntityModel;
use Modules\Url\Models\LinkCommentModel;

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

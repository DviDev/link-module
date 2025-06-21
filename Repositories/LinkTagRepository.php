<?php

namespace Modules\Link\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Link\Entities\LinkTag\LinkTagEntityModel;
use Modules\Link\Models\LinkTagModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method self obj()
 * @method LinkTagModel model()
 * @method LinkTagEntityModel find($id)
 * @method LinkTagModel first()
 * @method LinkTagModel findOrNew($id)
 * @method LinkTagModel firstOrNew($query)
 * @method LinkTagEntityModel findOrFail($id)
 */
class LinkTagRepository extends BaseRepository
{
    /**
     * {@inheritDoc}
     */
    public function modelClass(): string
    {
        return LinkTagModel::class;
    }
}

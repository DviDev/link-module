<?php

namespace Modules\Url\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Url\Entities\LinkEntityModel;
use Modules\Url\Models\LinkModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method LinkModel model()
 * @method LinkEntityModel find($id)
 * @method LinkModel first()
 * @method LinkModel findOrNew($id)
 * @method LinkModel firstOrNew($query)
 * @method LinkEntityModel findOrFail($id)
 */
class LinkRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return LinkModel::class;
    }
}

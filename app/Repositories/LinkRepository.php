<?php

declare(strict_types=1);

namespace Modules\Link\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Modules\Base\Repository\BaseRepository;
use Modules\Link\Entities\Link\LinkEntityModel;
use Modules\Link\Models\LinkModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method self obj()
 * @method LinkModel model()
 * @method LinkEntityModel find($id)
 * @method LinkModel first()
 * @method LinkModel findOrNew($id)
 * @method LinkModel firstOrNew(Builder|\Illuminate\Database\Query\Builder $query)
 * @method LinkEntityModel findOrFail($id)
 */
final class LinkRepository extends BaseRepository
{
    /**
     * {@inheritDoc}
     */
    public function modelClass(): string
    {
        return LinkModel::class;
    }
}

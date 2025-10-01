<?php

declare(strict_types=1);

namespace Modules\Link\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Modules\Base\Contracts\BaseRepository;
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
 * @method LinkTagModel firstOrNew(Builder|\Illuminate\Database\Query\Builder $query)
 * @method LinkTagEntityModel findOrFail($id)
 */
final class LinkTagRepository extends BaseRepository
{
    /**
     * {@inheritDoc}
     */
    public function modelClass(): string
    {
        return LinkTagModel::class;
    }
}

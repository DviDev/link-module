<?php

namespace Modules\Link\Entities\LinkTag;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Link\Models\LinkTagModel;
use Modules\Link\Repositories\LinkTagRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read LinkTagModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method LinkTagRepository repository()
 */
class LinkTagEntityModel extends BaseEntityModel
{
    use LinkTagProps;

    protected function repositoryClass(): string
    {
        return LinkTagRepository::class;
    }
}

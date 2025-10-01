<?php

declare(strict_types=1);

namespace Modules\Link\Entities\Link;

use Modules\Base\Contracts\BaseEntityModel;
use Modules\Link\Models\LinkModel;
use Modules\Link\Repositories\LinkRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read LinkModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method LinkRepository repository()
 */
final class LinkEntityModel extends BaseEntityModel
{
    use LinkProps;

    protected function repositoryClass(): string
    {
        return LinkRepository::class;
    }
}

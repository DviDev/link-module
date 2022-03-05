<?php

namespace Modules\Link\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Link\Repositories\LinkRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $workspace_id
 * @property $user_id
 * @property $name
 * @property $link_url
 * @property $description
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method LinkRepository repository()
 */
class LinkEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return LinkRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('urls', $alias);
    }
}


<?php

namespace Modules\Link\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Link\Repositories\LinkTagRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $link_id
 * @property $tag
 * @method static self props($alias = null, $force = null)
 * @method LinkTagRepository repository()
 */
class LinkTagEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return LinkTagRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('url_tags', $alias);
    }
}


<?php

namespace Modules\Link\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Link\Repositories\LinkCommentRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $link_id
 * @property $user_id
 * @property $parent_id
 * @property $message
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method LinkCommentRepository repository()
 */
class LinkCommentEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return LinkCommentRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('url_comments', $alias);
    }
}


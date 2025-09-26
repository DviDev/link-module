<?php

declare(strict_types=1);

namespace Modules\Link\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Base\Contracts\BaseModel;
use Modules\Base\Contracts\BaseFactory;
use Modules\Link\Entities\Link\LinkEntityModel;
use Modules\Link\Entities\Link\LinkProps;
use Modules\Workspace\Models\WorkspaceLinkModel;
use Modules\Workspace\Models\WorkspaceModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read User $user
 *
 * @method LinkEntityModel toEntity()
 */
final class LinkModel extends BaseModel
{
    use LinkProps;

    public static function table($alias = null): string
    {
        return self::dbTable('links', $alias);
    }

    public function modelEntity(): string
    {
        return LinkEntityModel::class;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags(): HasMany
    {
        return $this->hasMany(LinkTagModel::class, 'link_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(LinkCommentModel::class, 'link_id');
    }

    public function workspaces(): BelongsToMany
    {
        return $this->belongsToMany(WorkspaceModel::class, WorkspaceLinkModel::table(), 'workspace_id', 'link_id');
    }

    protected static function newFactory()
    {
        return new class extends BaseFactory
        {
            protected $model = LinkModel::class;
        };
    }
}

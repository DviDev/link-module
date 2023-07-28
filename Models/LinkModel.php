<?php

namespace Modules\Link\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Base\Models\BaseModel;
use Modules\Link\Database\Factories\LinkFactory;
use Modules\Link\Entities\Link\LinkEntityModel;
use Modules\Link\Entities\Link\LinkProps;
use Modules\Workspace\Models\WorkspaceLinkModel;
use Modules\Workspace\Models\WorkspaceModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read User $user
 * @method LinkEntityModel toEntity()
 * @method static LinkFactory factory($count = null, $state = [])
 */
class LinkModel extends BaseModel
{
    use HasFactory;
    use LinkProps;

    public function modelEntity(): string
    {
        return LinkEntityModel::class;
    }

    protected static function newFactory(): LinkFactory
    {
        return new LinkFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('links', $alias);
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
}

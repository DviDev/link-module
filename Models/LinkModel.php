<?php

namespace Modules\Link\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Models\BaseModel;
use Modules\Link\Database\Factories\LinkFactory;
use Modules\Link\Entities\Link\LinkEntityModel;
use Modules\Link\Entities\Link\LinkProps;
use Modules\Workspace\Models\WorkspaceModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read User $user
 * @method LinkEntityModel toEntity()
 * @method static LinkFactory factory()
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
}

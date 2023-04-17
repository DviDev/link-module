<?php

namespace Modules\Link\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Base\Models\BaseModel;
use Modules\Link\Database\Factories\LinkCommentFactory;
use Modules\Link\Entities\LinkComment\LinkCommentEntityModel;
use Modules\Link\Entities\LinkComment\LinkCommentProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read LinkModel $link
 * @property-read User $user
 * @method LinkCommentEntityModel toEntity()
 * @method static LinkCommentFactory factory()
 */
class LinkCommentModel extends BaseModel
{
    use HasFactory;
    use LinkCommentProps;
    use SoftDeletes;

    public function modelEntity(): string
    {
        return LinkCommentEntityModel::class;
    }

    protected static function newFactory(): LinkCommentFactory
    {
        return new LinkCommentFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('link_comments', $alias);
    }

    public function link(): BelongsTo
    {
        return $this->belongsTo(LinkModel::class, 'link_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function votes(): HasMany
    {
        return $this->hasMany(LinkCommentVoteModel::class, 'comment_id');
    }
}

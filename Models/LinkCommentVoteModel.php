<?php

namespace Modules\Link\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Models\BaseModel;
use Modules\Link\Database\Factories\LinkCommentVoteFactory;
use Modules\Link\Entities\LinkCommentVote\LinkCommentVoteEntityModel;
use Modules\Link\Entities\LinkCommentVote\LinkCommentVoteProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read LinkCommentModel $comment
 * @property-read User $user
 * @method LinkCommentVoteEntityModel toEntity()
 * @method static LinkCommentVoteFactory factory()
 */
class LinkCommentVoteModel extends BaseModel
{
    use HasFactory;
    use LinkCommentVoteProps;

    public function modelEntity(): string
    {
        return LinkCommentVoteEntityModel::class;
    }

    protected static function newFactory(): LinkCommentVoteFactory
    {
        return new LinkCommentVoteFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('link_comment_votes', $alias);
    }

    public function comment(): BelongsTo
    {
        return $this->belongsTo(LinkCommentModel::class, 'comment_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

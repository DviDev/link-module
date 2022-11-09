<?php
namespace Modules\Link\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Link\Models\LinkCommentVoteModel;
use Modules\Link\Entities\LinkCommentVote\LinkCommentVoteEntityModel;

/**
 * @method LinkCommentVoteModel create(array $attributes = [])
 * @method LinkCommentVoteModel make(array $attributes = [])
 */
class LinkCommentVoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LinkCommentVoteModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = LinkCommentVoteEntityModel::props(null, true);
        return [
            $p->comment_id => null,
            $p->user_id => null,
            $p->up_vote => null,
            $p->down_vote => null,
        ];
    }
}

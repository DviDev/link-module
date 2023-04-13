<?php

namespace Modules\Link\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Link\Entities\LinkCommentVote\LinkCommentVoteEntityModel;
use Modules\Link\Models\LinkCommentModel;
use Modules\Link\Models\LinkCommentVoteModel;
use Modules\Link\Models\LinkModel;
use Modules\Link\Models\LinkTagModel;
use Modules\Workspace\Models\WorkspaceLinkModel;
use Modules\Workspace\Models\WorkspaceModel;

class LinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return LinkModel[]|Collection
     */
    public function run(WorkspaceModel $workspace, User $user): array|Collection
    {
        Model::unguard();

        $links = LinkModel::factory()
            ->count(config('app.LINK_SEED_COUNT'))
            ->for($user, 'user')
            ->create();
        $links->each(function (LinkModel $link) use ($workspace) {
            WorkspaceLinkModel::factory()->for($workspace, 'workspace')->for($link, 'link')
                ->create()->each(function () use ($workspace, $link) {
                    ds("sync workspace $workspace->id link $link->id");
                });

            LinkTagModel::factory()->count(config('app.LINK_TAG_SEED_COUNT'))
                ->for($link, 'link')->create()->each(function(LinkTagModel $linkTag) {
                    ds("link $linkTag->link_id tag $linkTag->id");
                });

            $workspace->participants()->each(function (User $participant) use ($link) {
                LinkCommentModel::factory()->count(config('app.COMMENTS_SEED_COUNT'))
                    ->for($link, 'link')->for($participant, 'user')->create()
                    ->each(function (LinkCommentModel $comment) use ($participant) {
                        ds("link $comment->link_id participant $participant->id comment $comment->id");
                        $p = LinkCommentVoteEntityModel::props();

                        $fnUpVote = fn(Factory $factory) => $factory->create([$p->up_vote => 1]);
                        $fnDownVote = fn(Factory $factory) => $factory->create([$p->down_vote => 1]);

                        $factory = LinkCommentVoteModel::factory()->for($comment, 'comment')->for($participant, 'user');
                        /**@var \Closure $choice*/
                        $choice = collect([$fnUpVote, $fnDownVote])->random();
                        $choice($factory);
                    });
            });
        });

        return $links;
    }
}

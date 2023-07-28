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
    public function run(WorkspaceModel $workspace, User $user)
    {
        Model::unguard();

        $links = LinkModel::factory(config('app.SEED_LINK_COUNT', 3))
            ->for($user, 'user')
            ->has(LinkTagModel::factory(config('app.SEED_LINK_TAG_COUNT', 3)))
            ->create()
            ->modelKeys();

        $workspace->links()->attach($links);

        $workspace->links()->each(function (LinkModel $link) use ($workspace) {

            $workspace->participants()->each(function (User $participant) use ($link) {
                LinkCommentModel::factory()->count(config('app.SEED_COMMENTS_COUNT'))
                    ->for($link, 'link')
                    ->for($participant, 'user')
                    ->sequence(
                        ['parent_id' => null],
                        ['parent_id' => LinkCommentModel::query()->inRandomOrder()->first()->id ?? null]
                    )
                    ->create();

                $link->comments()->each(function (LinkCommentModel $comment) use ($participant) {
                    $p = LinkCommentVoteEntityModel::props();

                    $fnUpVote = fn(Factory $factory) => $factory->create([$p->up_vote => 1]);
                    $fnDownVote = fn(Factory $factory) => $factory->create([$p->down_vote => 1]);

                    $factory = LinkCommentVoteModel::factory()->for($comment, 'comment')->for($participant, 'user');
                    /**@var \Closure $choice */
                    $choice = collect([$fnUpVote, $fnDownVote])->random();
                    $choice($factory);
                });
            });
        });
    }
}

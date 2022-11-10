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
use Modules\Workspace\Entities\WorkspaceLink\WorkspaceLinkEntityModel;
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
            ->count(config('app.MODULE_SEED_COUNT'))
            ->for($user, 'user')
            ->create();
        $links->each(function (LinkModel $link) use ($workspace) {
            WorkspaceLinkModel::factory()->for($workspace, 'workspace')->for($link, 'link')->create();

            LinkTagModel::factory()->count(config('app.MODULE_SEED_CATEGORY_COUNT'))->for($link, 'link')->create();

            User::query()->limit(2)->get()->each(function (User $user) use ($link) {
                LinkCommentModel::factory()->count(config('app.MODULE_SEED_COUNT'))
                    ->for($link, 'link')->for($user, 'user')->create()
                    ->each(function (LinkCommentModel $comment) use ($user) {
                        $p = LinkCommentVoteEntityModel::props();

                        $fnUpVote = fn(Factory $factory) => $factory->create([$p->up_vote => 1]);
                        $fnDownVote = fn(Factory $factory) => $factory->create([$p->down_vote => 1]);

                        $factory = LinkCommentVoteModel::factory()->for($comment, 'comment')->for($user, 'user');
                        $choice = collect([$fnUpVote, $fnDownVote])->random();
                        $choice($factory);
                    });
            });
        });

        return $links;
    }
}

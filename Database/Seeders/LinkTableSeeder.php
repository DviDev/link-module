<?php

namespace Modules\Link\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\App\Database\Seeders\MessageTableSeeder;
use Modules\App\Models\RecordModel;
use Modules\Link\Models\LinkModel;
use Modules\Link\Models\LinkTagModel;
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
            $entity = RecordModel::factory()->create();
            $link->record_id = $entity->id;
            $link->save();

            $workspace->participants()->each(function (User $user) use ($entity) {
                $this->call(MessageTableSeeder::class, parameters: compact('entity', 'user'));
            });
        });
    }
}

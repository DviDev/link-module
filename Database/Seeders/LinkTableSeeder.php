<?php

namespace Modules\Link\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Modules\Base\Database\Seeders\BaseSeeder;
use Modules\Base\Models\RecordModel;
use Modules\Link\Models\LinkModel;
use Modules\Link\Models\LinkTagModel;
use Modules\Post\Database\Seeders\MessageTableSeeder;
use Modules\Workspace\Models\WorkspaceModel;

class LinkTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return LinkModel[]|Collection
     */
    public function run(WorkspaceModel $workspace, User $user)
    {
        Model::unguard();

        $this->command->warn(PHP_EOL.'🤖 🌱 seeding '.str(__CLASS__)->explode('\\')->last().' ...');

        $links = LinkModel::factory(config('link.SEED_LINKS_COUNT', 3))
            ->for($user, 'user')
            ->has(LinkTagModel::factory(config('link.SEED_LINK_TAGS_COUNT', 3)))
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

        $this->commandInfo(__CLASS__, '🟢 done');
    }
}

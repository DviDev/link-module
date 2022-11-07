<?php

namespace Modules\Link\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Link\Entities\Link\LinkEntityModel;
use Modules\Link\Models\LinkModel;
use Modules\Workspace\Entities\Workspace\WorkspaceEntityModel;
use Modules\Workspace\Models\WorkspaceModel;

class LinkDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $p = LinkEntityModel::props();
        LinkModel::factory()->create([
            $p->workspace_id => WorkspaceModel::query()->inRandomOrder()->first()->id,
            $p->user_id => User::query()->inRandomOrder()->first()->id
        ]);
    }
}

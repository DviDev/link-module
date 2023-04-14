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

        User::query()->find(1)->workspaces()->each(function (WorkspaceModel $workspace) {
            $user = $workspace->user;
            $this->call(LinkTableSeeder::class, true, compact('workspace', 'user'));
        });
    }
}

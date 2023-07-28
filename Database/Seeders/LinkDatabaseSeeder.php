<?php

namespace Modules\Link\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\DBMap\Domains\ScanTableDomain;
use Modules\Link\Entities\Link\LinkEntityModel;
use Modules\Link\Models\LinkModel;
use Modules\Permission\Database\Seeders\PermissionTableSeeder;
use Modules\Project\Database\Seeders\ProjectTableSeeder;
use Modules\Project\Models\ProjectModuleModel;
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

        (new ScanTableDomain())->scan('link');

        $module = ProjectModuleModel::query()->where('name', 'Link')->first();
        $project = $module->project;

        User::query()->find(1)->workspaces()
            ->each(function (WorkspaceModel $workspace) {
                $user = $workspace->user;
                $this->call(LinkTableSeeder::class, true, compact('workspace', 'user'));
            });

        $project->links()->attach(LinkModel::query()->get()->modelKeys());

        $this->call(class: PermissionTableSeeder::class, parameters: ['module' => $module]);

        $this->call(ProjectTableSeeder::class, parameters: ['project' => $project, 'module' => $module]);

    }
}

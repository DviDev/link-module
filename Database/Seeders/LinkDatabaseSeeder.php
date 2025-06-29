<?php

namespace Modules\Link\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Base\Database\Seeders\BaseSeeder;
use Modules\DBMap\Domains\ScanTableDomain;
use Modules\Link\Models\LinkModel;
use Modules\Permission\Database\Seeders\PermissionTableSeeder;
use Modules\Project\Models\ProjectModuleModel;
use Modules\Workspace\Models\WorkspaceModel;

class LinkDatabaseSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->command->warn(PHP_EOL.'🤖 🌱 seeding '.str(__CLASS__)->explode('\\')->last().' ...');

        if (config('dbmap.name')) {
            (new ScanTableDomain)->scan('link');
        }

        if (config('workspace.name')) {
            WorkspaceModel::byUserId(User::query()->find(1)->id)
                ->each(function (WorkspaceModel $workspace) {
                    $user = $workspace->user;
                    $this->call(LinkTableSeeder::class, true, compact('workspace', 'user'));
                });
        }

        if (config('project.name')) {
            $module = ProjectModuleModel::byName('Link');
            $project = $module->project;
            $project->links()->attach(LinkModel::query()->get()->modelKeys());

            if (config('permission.name')) {
                $this->call(class: PermissionTableSeeder::class, parameters: ['module' => $module]);
            }
        }

        $this->commandInfo(__CLASS__, '🟢 done');
    }
}

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

        //Todo fazer o msm que foi feito no chat e preencher as entidades e seus requisitos
        //Depois de tudo acho que essas tabelas de modulos e entidades devem ficar em algum lugar mais gererico?
        //ou ainda faz sentido permanecer em Projeto?
        
        User::query()->find(1)->workspaces()->each(function (WorkspaceModel $workspace) {
            $user = $workspace->user;
            $this->call(LinkTableSeeder::class, true, compact('workspace', 'user'));
        });
    }
}

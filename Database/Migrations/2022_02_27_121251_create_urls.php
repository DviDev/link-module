<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Link\Entities\LinkEntityModel;

class CreateUrls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();

            $prop = LinkEntityModel::props(null, true);
            $table->bigInteger($prop->workspace_id)->unsigned();
            $table->bigInteger($prop->user_id)->unsigned();
            $table->string($prop->name, 100);
            $table->text($prop->link_url);
            $table->text($prop->description)->nullable();
            $table->timestamp($prop->created_at)->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
}

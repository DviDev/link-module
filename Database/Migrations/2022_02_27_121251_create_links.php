<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Link\Entities\Link\LinkEntityModel;

return new class extends Migration
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

            $table->timestamps();
            $table->softDeletes();
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
};

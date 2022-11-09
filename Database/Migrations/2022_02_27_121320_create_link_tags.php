<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Link\Entities\LinkTag\LinkTagEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_tags', function (Blueprint $table) {
            $table->id();

            $prop = LinkTagEntityModel::props(null, true);
            $table->bigInteger($prop->link_id)->unsigned();
            $table->char($prop->tag, 14);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('link_tags');
    }
};

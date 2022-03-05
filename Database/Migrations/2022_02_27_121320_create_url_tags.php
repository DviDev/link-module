<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Url\Entities\LinkTagEntityModel;

class CreateUrlTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('url_tags', function (Blueprint $table) {
            $table->id();

            $prop = LinkTagEntityModel::props(null, true);
            $table->bigInteger($prop->url_id)->unsigned();
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
        Schema::dropIfExists('url_tags');
    }
}

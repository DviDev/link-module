<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Link\Entities\LinkTag\LinkTagEntityModel;

return new class extends Migration
{
    public function up()
    {
        Schema::create('link_tags', function (Blueprint $table) {
            $table->id();

            $prop = LinkTagEntityModel::props(null, true);
            $table->foreignId($prop->link_id)
                ->references('id')->on('links')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->char($prop->tag, 14);
        });
    }

    public function down()
    {
        Schema::dropIfExists('link_tags');
    }
};

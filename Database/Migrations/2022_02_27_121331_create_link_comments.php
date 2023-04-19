<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Link\Entities\LinkComment\LinkCommentEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_comments', function (Blueprint $table) {
            $table->id();

            $prop = LinkCommentEntityModel::props(null, true);
            $table->foreignId($prop->link_id)
                ->references('id')->on('links')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId($prop->user_id)
                ->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId($prop->parent_id)
                ->nullable()
                ->references('id')->on('link_comments')
                ->cascadeOnUpdate()->nullOnDelete();

            $table->text($prop->message);

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
        Schema::dropIfExists('link_comments');
    }
};

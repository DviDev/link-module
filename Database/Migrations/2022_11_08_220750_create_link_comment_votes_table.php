<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Link\Entities\LinkCommentVote\LinkCommentVoteEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_comment_votes', function (Blueprint $table) {
            $p = LinkCommentVoteEntityModel::props(null, true);
            $table->id();
            $table->foreignId($p->user_id)
                ->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId($p->comment_id)
                ->references('id')->on('link_comments')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->boolean($p->up_vote)->unsigned()->nullable();
            $table->boolean($p->down_vote)->unsigned()->nullable();

            $table->timestamp($p->created_at);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('link_comment_votes');
    }
};

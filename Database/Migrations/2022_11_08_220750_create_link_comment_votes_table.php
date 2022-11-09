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
            $table->bigInteger($p->user_id)->unsigned();
            $table->bigInteger($p->comment_id)->unsigned();
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

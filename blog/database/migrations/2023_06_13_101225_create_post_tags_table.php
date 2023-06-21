<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('post_id');  
            $table->index('tag_id');

            $table->foreign('post_id','post_tag_post_fk')->on('posts')->references('id')->onDelete('cascade');
            $table->foreign('tag_id','post_tag_tag_fk')->on('tags')->references('id')->onDelete('cascade');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tags');
    }
}

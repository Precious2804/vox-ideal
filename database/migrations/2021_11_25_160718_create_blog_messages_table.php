<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_messages', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique_id');
            $table->string('posted_by')->nullable();
            $table->longText('subject')->nullable();
            $table->longText('content');
            $table->longText('half_content');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_messages');
    }
}

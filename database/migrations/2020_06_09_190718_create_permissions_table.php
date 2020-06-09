<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type_id');
            $table->integer('feed_write')->default(1);
            $table->integer('blog_write')->default(1);
            $table->integer('blog_view')->default(1);
            $table->integer('video_write')->default(1);
            $table->integer('video_view')->default(1);
            $table->integer('f2f_write')->default(1);
            $table->integer('f2f_view')->default(1);
            

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
        Schema::dropIfExists('permissions');
    }
}

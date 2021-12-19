<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->foreignId('users_id')->references('id')->on('users')->comment('foreign key tables users');
            $table->foreignId('request_posts_id')->references('id')->on('request_posts')->comment('foreign key tables request_posts');
            $table->text('body');
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
        Schema::dropIfExists('comments');

        Schema::table('comments', function (Blueprint $table) {
            //the drop Foreing key 
               $table->dropForeign('comments_user_id_foreign');
               $table->dropForeign('comments_request_posts_id_foreign');
              // $table->dropForeign('request_posts_tv_series_id_foreign');
         });
    }
}

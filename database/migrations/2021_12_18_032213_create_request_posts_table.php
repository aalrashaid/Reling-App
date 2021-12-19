<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_posts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->foreignId('users_id')->references('id')->on('users')->comment('foreign key tables users');
            $table->foreignId('movies_id')->references('id')->on('movies')->comment('foreign key tables users');
            $table->foreignId('tv_series_id')->references('id')->on('tv_series')->comment('foreign key tables users');
            $table->string('name');
            $table->string('thmdb_id')->nullable()->comment('The Name of people ');
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
        Schema::dropIfExists('request_posts');

        Schema::table('request_posts', function (Blueprint $table) {
            //the drop Foreing key 
               $table->dropForeign('request_posts_user_id_foreign');
               $table->dropForeign('request_posts_movies_id_foreign');
               $table->dropForeign('request_posts_tv_series_id_foreign');
         });
    }
}

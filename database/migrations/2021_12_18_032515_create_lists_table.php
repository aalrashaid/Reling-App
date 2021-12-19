<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lists', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->foreignId('users_id')->references('id')->on('users')->comment('foreign key tables users');
            //$table->foreignId('request_posts_id')->references('id')->on('request_posts')->comment('foreign key tables users');
            $table->foreignId('movies_id')->references('id')->on('movies')->comment('foreign key tables users');
            $table->foreignId('tv_series_id')->references('id')->on('tv_series')->comment('foreign key tables users');
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
        Schema::dropIfExists('lists');

        Schema::table('lists', function (Blueprint $table) {
            //the drop Foreing key 
               $table->dropForeign('lists_user_id_foreign');
               $table->dropForeign('lists_movies_id_foreign');
               $table->dropForeign('lists_tv_series_id_foreign');
         });
    }
}

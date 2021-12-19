<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagnetLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magnet_links', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->foreignId('users_id')->references('id')->on('users')->comment('foreign key tables users');
            $table->foreignId('request_posts_id')->references('id')->on('request_posts')->comment('foreign key tables request_posts');
            $table->foreignId('movies_id')->references('id')->on('movies')->comment('foreign key tables movies');
            $table->foreignId('tv_series_id')->references('id')->on('tv_series')->comment('foreign key tables tv_series');
            $table->foreignId('resolutions_id')->references('id')->on('resolutions')->comment('foreign key tables resolutions');
            $table->text('magnet_links');
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
        Schema::dropIfExists('magnet_links');

        Schema::table('magnet_links', function (Blueprint $table) {
            //the drop Foreing key 
               $table->dropForeign('magnet_links_user_id_foreign');
               $table->dropForeign('magnet_links_movies_id_foreign');
               $table->dropForeign('magnet_links_tv_series_id_foreign');
               $table->dropForeign('magnet_links_resolutions_id_foreign');
         });
    }
}

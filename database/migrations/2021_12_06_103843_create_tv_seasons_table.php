<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_seasons', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('tv_seasons_id')->nullable()->comment('The Name of people ');
            $table->date('air_date')->nullable()->comment('The Name of people ');
            $table->json('episodes')->nullable()->comment('The Name of people ');
            $table->string('name')->nullable()->comment('The Name of people ');
            $table->text('overview')->nullable()->comment('The Name of people ');
            $table->string('thmdb_id')->nullable()->comment('The Name of people ');
            $table->binary('poster_path')->nullable()->comment('The Name of people ');
            $table->string('season_number')->nullable()->comment('The Name of people ');
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
        Schema::dropIfExists('tv_seasons');
    }
}

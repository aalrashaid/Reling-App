<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_episodes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->timestamps();
            $table->date('air_date')->nullable()->comment('The Name of people ');
            $table->json('crew')->nullable()->comment('The Name of people ');
            $table->integer('episode_number')->nullable()->comment('The Name of people ');
            $table->json('guest_stars')->nullable()->comment('The Name of people ');
            $table->string('name')->nullable()->comment('The Name of people ');
            $table->text('overview')->nullable()->comment('The Name of people ');
            $table->string('thmd_id')->nullable()->comment('The Name of people ');
            $table->string('production_code')->nullable()->comment('The Name of people ');
            $table->integer('season_number')->nullable()->comment('The Name of people ');
            $table->binary('still_path')->nullable()->comment('The Name of people ');
            $table->float('vote_average')->nullable()->comment('The Name of people ');
            $table->integer('vote_count')->nullable()->comment('The Name of people ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tv_episodes');
    }
}

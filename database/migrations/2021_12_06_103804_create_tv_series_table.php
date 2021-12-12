<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_series', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->binary('backdrop_path')->nullable()->comment('The Name of people ');
            $table->json('created_by')->nullable()->comment('The Name of people ');
            $table->string('episode_run_time')->nullable()->comment('The Name of people ');
            $table->date('first_air_date')->nullable()->comment('The Name of people ');
            $table->json('genres')->nullable()->comment('The Name of people ');
            $table->string('homepage')->nullable()->comment('The Name of people ');
            $table->string('thmdb_id')->nullable()->comment('The Name of people ');
            $table->string('in_production')->nullable()->comment('The Name of people ');
            $table->json('languages')->nullable()->comment('The Name of people ');
            $table->date('last_air_date')->nullable()->comment('The Name of people ');
            $table->json('last_episode_to_air')->nullable()->comment('The Name of people ');
            $table->string('name')->nullable()->comment('The Name of people ');
            $table->string('next_episode_to_air')->nullable()->comment('The Name of people ');
            $table->json('networks')->nullable()->comment('The Name of people ');
            $table->string('number_of_episodes')->nullable()->comment('The Name of people ');
            $table->string('number_of_seasons')->nullable()->comment('The Name of people ');
            $table->json('origin_country')->nullable()->comment('The Name of people ');
            $table->string('original_language')->nullable()->comment('The Name of people ');
            $table->string('original_name')->nullable()->comment('The Name of people ');
            $table->text('overview')->nullable()->comment('The Name of people ');
            $table->string('popularity')->nullable()->comment('The Name of people ');
            $table->binary('poster_path')->nullable()->comment('The Name of people ');
            $table->json('production_companies')->nullable()->comment('The Name of people ');
            $table->json('production_countries')->nullable()->comment('The Name of people ');
            $table->json('seasons')->nullable()->comment('The Name of people ');
            $table->json('spoken_languages')->nullable()->comment('The Name of people ');
            $table->string('status')->nullable()->comment('The Name of people ');
            $table->string('tagline')->nullable()->comment('The Name of people ');
            $table->string('type')->nullable()->comment('The Name of people ');
            $table->float('vote_average')->nullable()->comment('The Name of people ');
            $table->string('vote_count')->nullable()->comment('The Name of people ');
            
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
        Schema::dropIfExists('tv_series');
    }
}

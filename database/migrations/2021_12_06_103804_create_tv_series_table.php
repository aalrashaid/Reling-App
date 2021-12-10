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
            $table->string('created_by')->nullable()->comment('The Name of people ');
            $table->string('episode_run_time')->nullable()->comment('The Name of people ');
            $table->string('first_air_date')->nullable()->comment('The Name of people ');
            $table->string('homepage')->nullable()->comment('The Name of people ');
            $table->string('thmdb_id')->nullable()->comment('The Name of people ');
            $table->string('in_production')->nullable()->comment('The Name of people ');
            $table->string('languages')->nullable()->comment('The Name of people ');
            $table->string('last_air_date')->nullable()->comment('The Name of people ');
            $table->string('last_episode_to_air')->nullable()->comment('The Name of people ');
            $table->string('name')->nullable()->comment('The Name of people ');
            $table->string('next_episode_to_air')->nullable()->comment('The Name of people ');
            $table->string('networks')->nullable()->comment('The Name of people ');
            $table->string('number_of_episodes')->nullable()->comment('The Name of people ');
            $table->string('number_of_seasons')->nullable()->comment('The Name of people ');
            $table->string('origin_country')->nullable()->comment('The Name of people ');
            $table->string('original_language')->nullable()->comment('The Name of people ');
            $table->string('original_name')->nullable()->comment('The Name of people ');
            $table->text('overview')->nullable()->comment('The Name of people ');
            $table->string('popularity')->nullable()->comment('The Name of people ');
            $table->string('poster_path')->nullable()->comment('The Name of people ');
            $table->string('production_companies')->nullable()->comment('The Name of people ');
            $table->string('production_countries')->nullable()->comment('The Name of people ');
            $table->string('seasons')->nullable()->comment('The Name of people ');
            $table->string('spoken_languages')->nullable()->comment('The Name of people ');
            $table->string('status')->nullable()->comment('The Name of people ');
            $table->string('tagline')->nullable()->comment('The Name of people ');
            $table->string('type')->nullable()->comment('The Name of people ');
            $table->string('vote_average')->nullable()->comment('The Name of people ');
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

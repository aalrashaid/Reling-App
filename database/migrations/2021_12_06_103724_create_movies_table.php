<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->boolean('adult')->nullable()->comment('The Name of people ');
            $table->string('backdrop_path')->nullable()->comment('The Name of people ');
            $table->json('belongs_to_collection')->nullable()->comment('The Name of people ');
            $table->string('budget')->nullable()->comment('The Name of people ');
            $table->json('genres')->nullable()->comment('The Name of people ');
            $table->string('homepage')->nullable()->comment('The Name of people ');
            $table->string('thmdb_id')->nullable()->comment('The Name of people ');
            $table->string('imdb_id')->nullable()->comment('The Name of people ');
            $table->string('original_language')->nullable()->comment('The Name of people ');
            $table->string('original_title')->nullable()->comment('The Name of people ');
            $table->text('overview')->nullable()->comment('The Name of people ');
            $table->decimal('popularity')->nullable()->comment('The Name of people ');
            $table->binary('poster_path')->nullable()->comment('The Name of people ');
            $table->json('production_companies')->nullable()->comment('The Name of people ');
            $table->json('production_countries')->nullable()->comment('The Name of people ');
            $table->string('release_date')->nullable()->comment('The Name of people ');
            $table->string('revenue')->nullable()->comment('The Name of people ');
            $table->string('runtime')->nullable()->comment('The Name of people ');
            $table->json('spoken_languages')->nullable()->comment('The Name of people ');
            $table->string('status')->nullable()->comment('The Name of people ');
            $table->string('tagline')->nullable()->comment('The Name of people ');
            $table->string('title')->nullable()->comment('The Name of people ');
            $table->string('video')->nullable()->comment('The Name of people ');
            $table->float('vote_average')->nullable()->comment('The Name of people ');
            $table->integer('vote_count')->nullable()->comment('The Name of people ');
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
        Schema::dropIfExists('movies');
    }
}

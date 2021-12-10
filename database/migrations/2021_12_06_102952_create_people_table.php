<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id()->comment('a primary key for table');
            $table->string('also_known_as')->nullable()->comment('The Name of people ');
            $table->mediumText('meaning')->nullable()->comment('the meaning and diescprtion');
            $table->date('birthday')->nullable()->comment('the birthday of people dd-mm-yyyy');
            $table->date('deathday')->nullable()->comment('the deathday of people dd-mm-yyyy');
            $table->integer('gender')->nullable()->comment('the gemder of people ');
            $table->string('homepage')->nullable()->comment('homepage address web site ');
            $table->string('thmdb_id')->nullable()->comment('the thmdb id of people ');
            $table->string('imdb_id')->nullable()->comment('the imdb_id id of people');
            $table->string('known_for_department')->nullable()->comment('the title department');
            $table->string('name')->nullable()->comment('the name ');
            $table->string('place_of_birth')->nullable()->comment(' the place of birth');
            $table->float('popularity')->nullable()->comment('the popularity of number float');
            $table->binary('profile_path')->nullable()->comment('the pitcher and path');
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
        Schema::dropIfExists('people');
    }
}

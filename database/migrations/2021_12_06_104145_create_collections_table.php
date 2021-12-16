<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('thmdb_id')->nullable()->comment('The Name of people ');
            $table->string('name')->nullable()->comment('The Name of people ');
            $table->text('overview')->nullable()->comment('The Name of people ');
            $table->string('poster_path')->nullable()->comment('The Name of people ');
            $table->string('backdrop_path')->nullable()->comment('The Name of people ');
            $table->json('parts')->nullable()->comment('The Name of people ');
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
        Schema::dropIfExists('collections');
    }
}

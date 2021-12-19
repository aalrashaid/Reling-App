<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resolutions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            // $table->charset = 'utf8mb4';
            // $table->collation = 'utf8mb4_unicode_ci';
            $table->id()->comment('primary key for tables');
            $table->string('name')->comment('team add you comments pls ');
			$table->string('slug')->unique()->comment('team add you comments pls ');
			$table->text('description')->comment('This caterory description');
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
        Schema::dropIfExists('resolutions');
    }
}

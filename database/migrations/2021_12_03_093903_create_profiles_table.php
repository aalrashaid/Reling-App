<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id()->comment('primary key in Table profiles');
            $table->foreignId('users_id')->references('id')->on('users')->comment('foreign key tables users');
            $table->string('FirstName')->comment('gender for user');
            $table->string('LastName')->comment('gender for user');
            $table->binary('Avtar')->comment('Avter of user Update');
            $table->mediumText('Bio')->comment('Bio');
            $table->string('gender')->comment('gender for user');
            $table->string('slug')->unique()->comment('slug address');
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
        Schema::dropIfExists('profiles');

        Schema::table('profiles', function (Blueprint $table) {
            //the drop Foreing key 
               $table->dropForeign('profiles_user_id_foreign');
               //$table->dropForeign('posts_category_id_foreign');
         });
    }
}

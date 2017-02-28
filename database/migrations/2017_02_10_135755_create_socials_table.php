<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('correo');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('google');
            $table->string('linkedin');
            $table->string('pinterest');
            $table->string('instagram');
            $table->string('tumblr');
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
        Schema::drop('socials');
    }
}

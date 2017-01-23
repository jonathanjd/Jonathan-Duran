<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');

            $table->integer('type_service_id')->unsigned();
            $table->foreign('type_service_id')->references('id')->on('type_services')->onDelete('cascade');

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
        Schema::drop('feature_services');
    }
}

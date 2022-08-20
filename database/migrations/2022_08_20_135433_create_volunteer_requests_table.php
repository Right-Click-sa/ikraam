<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteerRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('field_id');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('gender_id');
            $table->tinyText('name');
            $table->tinyText('email');
            $table->bigInteger('age');
            $table->bigInteger('phone');

            $table->timestamps();

            $table->foreign('field_id')->references('id')->on('volunteer_fields')->onDelete('cascade');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteer_requests');
    }
}

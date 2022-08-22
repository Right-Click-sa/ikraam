<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociationRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('association_requests', function (Blueprint $table) {
            $table->id();
            $table->tinyText('name');
            $table->tinyText('email');
            $table->bigInteger('number');
            $table->tinyText('chairman');
            $table->tinyText('founding');
            $table->tinyText('license');
            $table->tinyText('executive_director');
            $table->tinyText('location');
            $table->tinyText('objective');
            $table->tinyText('city');
            $table->tinyText('administrative_officer');
            $table->bigInteger('administrative_officer_number');
            $table->tinyText('file')->nullable();

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
        Schema::dropIfExists('association_requests');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_pages', function (Blueprint $table) {
            $table->id();
            $table->tinyText('video_link');
            $table->bigInteger('programs_number');
            $table->bigInteger('associations_number');
            $table->bigInteger('initiatives_number');
            $table->bigInteger('year1');
            $table->bigInteger('year1_cases');
            $table->bigInteger('year2');
            $table->bigInteger('year2_cases');
            $table->bigInteger('year3');
            $table->bigInteger('year3_cases');
            $table->bigInteger('tombs_number');
            $table->bigInteger('washbasins_number');
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
        Schema::dropIfExists('main_pages');
    }
}

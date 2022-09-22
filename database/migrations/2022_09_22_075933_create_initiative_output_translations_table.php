<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitiativeOutputTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initiative_output_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('initiative_output_id');
            $table->string('locale')->index();
            $table->tinyText('output');

            $table->unique(['initiative_output_id', 'locale']);
            $table->foreign('initiative_output_id')->references('id')->on('initiative_outputs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('initiative_output_translations');
    }
}

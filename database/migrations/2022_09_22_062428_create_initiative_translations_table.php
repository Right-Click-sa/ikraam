<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitiativeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initiative_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('initiative_id');
            $table->string('locale')->index();
            $table->tinyText('title');
            $table->text('initiative');

            $table->unique(['initiative_id', 'locale']);
            $table->foreign('initiative_id')->references('id')->on('initiatives')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('initiative_translations');
    }
}

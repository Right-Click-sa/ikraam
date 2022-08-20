<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommitteeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('committee_id');
            $table->string('locale')->index();
            $table->tinyText('committee_name');
            $table->tinyText('chairman');
            $table->tinyText('goal');

            $table->unique(['committee_id', 'locale']);
            $table->foreign('committee_id')->references('id')->on('committees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('committee_translations');
    }
}

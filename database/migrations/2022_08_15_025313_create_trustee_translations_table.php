<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrusteeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trustee_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trustee_id');
            $table->string('locale')->index();
            $table->string('title');
            $table->string('name');

            $table->unique(['trustee_id', 'locale']);
            $table->foreign('trustee_id')->references('id')->on('trustees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trustee_translations');
    }
}

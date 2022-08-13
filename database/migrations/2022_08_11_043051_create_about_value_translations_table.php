<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutValueTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_value_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('about_value_id');
            $table->string('locale')->index();
            $table->string('title');
            $table->string('description');

            $table->unique(['about_value_id', 'locale']);
            $table->foreign('about_value_id')->references('id')->on('about_values')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_value_translations');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteerFieldTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_field_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('volunteer_field_id');
            $table->string('locale')->index();
            $table->tinyText('field');

            $table->unique(['volunteer_field_id', 'locale']);
            $table->foreign('volunteer_field_id')->references('id')->on('volunteer_fields')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteer_field_translations');
    }
}

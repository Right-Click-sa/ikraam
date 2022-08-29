<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociationTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('association_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('association_id');
            $table->string('locale')->index();
            $table->tinyText('name');
            $table->tinyText('location');
            $table->tinyText('city');
            $table->tinyText('objective');
            $table->tinyText('executive_director');
            $table->tinyText('administrative_officer');
            $table->tinyText('chairman');

            $table->unique(['association_id', 'locale']);
            $table->foreign('association_id')->references('id')->on('associations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('association_translations');
    }
}

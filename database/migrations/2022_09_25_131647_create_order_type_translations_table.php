<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTypeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_type_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_type_id');
            $table->string('locale')->index();
            $table->tinyText('type');

            $table->unique(['order_type_id', 'locale']);
            $table->foreign('order_type_id')->references('id')->on('order_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_type_translations');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderRequestAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_request_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_request_id');
            $table->tinyText('attachment')->nullable();
            $table->timestamps();

            $table->foreign('order_request_id')->references('id')->on('order_requests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_request_attachments');
    }
}

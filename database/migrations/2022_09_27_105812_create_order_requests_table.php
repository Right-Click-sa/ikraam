<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_type_id');
            $table->unsignedBigInteger('association_id');
            $table->unsignedBigInteger('status_id')->default(2);
            $table->text('description');
            $table->text('rejection_reason')->nullable();

            $table->timestamps();

            $table->foreign('order_type_id')->references('id')->on('order_types')->onDelete('cascade');
            $table->foreign('association_id')->references('id')->on('associations')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_requests');
    }
}

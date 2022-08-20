<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommitteeTaskTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee_task_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('committee_task_id');
            $table->string('locale')->index();
            $table->tinyText('task');

            $table->unique(['committee_task_id', 'locale']);
            $table->foreign('committee_task_id')->references('id')->on('committee_tasks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('committee_task_translations');
    }
}

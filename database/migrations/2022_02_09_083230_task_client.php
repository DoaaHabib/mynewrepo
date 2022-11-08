<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaskClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_client', function (Blueprint $table) {
        $table->id();
        $table->string('state')->default(0);
        $table->unsignedBigInteger('client_id');
        $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        $table->unsignedBigInteger('task_id');
        $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');

    });}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

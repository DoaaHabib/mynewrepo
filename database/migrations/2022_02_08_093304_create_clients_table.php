<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('email_verified_at')->unllable();
            $table->string('password');
            $table->boolean('state')->default(0);
            $table->boolean('bloked')->default(0);
            $table->string('Date_create_account');
            $table->string('Points_Balance');
            $table->string('title');
            $table->string('phone');
            $table->string('type')->default('user');
            $table->string('gender');
            $table->string('link_facebook');
            $table->string('link_instgram');
            $table->string('logo');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}

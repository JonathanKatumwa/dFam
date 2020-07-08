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
            $table->string('first_Name');
            $table->string('last_Name');
            $table->date('dob');
            $table->integer('age');
            $table->string('email')->unique();
            $table->string('phone_No');
            $table->longText('address');
            $table->longText('current_address');
            $table->string('nationality');
            $table->string('passport_No');
            $table->tinyInteger('status');
            $table->date('date_Registered');
            $table->string('image')->nullable();
            $table->integer('role')->default(1);
            $table->softDeletes();
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

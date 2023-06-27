<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nic');
            $table->string('contact');
            $table->text('address');
            $table->string('bloodGroup');
            $table->string('classA')->nullable();
            $table->string('classA_transmission')->nullable();
            $table->string('classB')->nullable();
            $table->string('classB_transmission')->nullable();
            $table->string('classB1')->nullable();
            $table->string('classCE')->nullable();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')->onDelete ('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};

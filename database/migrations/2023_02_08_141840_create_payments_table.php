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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('total')->nullable();
            $table->integer('installment1')->nullable();
            $table->string('slip1_photo')->nullable();
            $table->boolean('paid_unpaid1')->default('0');
            $table->integer('installment2')->nullable();
            $table->string('slip2_photo')->nullable();
            $table->boolean('paid_unpaid2')->default('0');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};

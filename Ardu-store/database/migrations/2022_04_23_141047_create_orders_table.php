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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('status')->default('pending');

            $table->string('order_number')->unique();
            $table->unsignedInteger('item_count');
            $table->decimal('grand_total', 20, 6);
            $table->string('first_name');
            $table->string('last_name');
            $table->text('address');
            $table->string('city');
            $table->string('country');
            $table->string('phone_number');
            $table->text('notes')->nullable();

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
        Schema::dropIfExists('orders');
    }
};

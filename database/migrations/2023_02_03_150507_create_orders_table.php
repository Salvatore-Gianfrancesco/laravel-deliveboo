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
            $table->string('client_firstname', 100)->nullable();
            $table->string('client_lastname', 100)->nullable();
            $table->string('client_address')->nullable();
            $table->string('client_phone')->nullable();
            $table->float('total_amount', 5, 2)->nullable();
            $table->time('delivery_time')->nullable();
            $table->boolean('is_delivery')->default(false);
            $table->date('date')->nullable();
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
        Schema::dropIfExists('orders');
    }
};

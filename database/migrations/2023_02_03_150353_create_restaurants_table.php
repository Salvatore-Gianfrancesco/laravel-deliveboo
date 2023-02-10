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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 100)->unique();
            $table->string('slug', 150);
            $table->text('description')->nullable();
            $table->string('address')->nullable();
            $table->string('piva', 11)->nullable();
            $table->string('image')->nullable();
            $table->float('min_order', 5, 2)->default(0);
            $table->float('delivery', 5, 2)->default(0);
            $table->time('closing_time')->nullable();
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
        Schema::dropIfExists('restaurants');
    }
};

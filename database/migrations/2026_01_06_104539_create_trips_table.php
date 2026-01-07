<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->integer('driver_id');
            $table->integer('car_id');
            $table->string('origin');
            $table->string('destination');
            $table->unsignedInteger('price')->nullable();
            $table->date('date')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->time('started_at')->nullable();
            $table->time('ended_at')->nullable();
            $table->tinyInteger('payment_method')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};

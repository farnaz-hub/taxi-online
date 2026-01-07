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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->bigInteger('phone_number');
            $table->string('email')->nullable();
            $table->string('username');
            $table->string('password');
            $table->tinyInteger('gender')->nullable();
            $table->date('birth_date')->nullable();
            $table->integer('province_id');
            $table->integer('city_id');
            $table->unsignedInteger('total_trips')->default(0);
            $table->unsignedInteger('wallet_balance')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

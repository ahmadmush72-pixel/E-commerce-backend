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
        Schema::create('order_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('slug')->unique(); // pending, processing, shipped
            $table->integer('sequence')->default(0); // flow order
            $table->boolean('is_final')->default(false); // delivered, cancelled
            $table->string('color')->nullable(); // UI purpose// pending, shipped, delivered
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_statuses');
    }
};

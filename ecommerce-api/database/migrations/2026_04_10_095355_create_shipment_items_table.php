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
        Schema::create('shipment_items', function (Blueprint $table) {
            $table->id();
            // Relation with shipment
            $table->foreignId('shipment_id')
          ->constrained()
          ->cascadeOnDelete();

        // Relation with order_items (NOT products ❗)
          $table->foreignId('order_item_id')
          ->constrained()
          ->cascadeOnDelete();

          // Quantity of this item in this shipment
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipment_items');
    }
};

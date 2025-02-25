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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Customer name
            $table->string('email'); // Customer email
            $table->string('mobile'); // Customer mobile number
            $table->text('address'); // Customer address
            $table->string('order_number'); // Order number
            $table->decimal('total_amount', 10, 2); // Total order amount
            $table->json('cart_items'); // Store cart items as JSON
            $table->text('notes')->nullable(); // Additional notes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

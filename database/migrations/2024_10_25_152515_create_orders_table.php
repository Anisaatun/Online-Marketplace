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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('product_name');
            $table->integer('quantity');
            $table->string('buyer_name');
            $table->string('address');
            $table->string('postal_code');
            $table->decimal('subtotal', 10, 2);
            $table->decimal('vat', 10, 2);
            $table->decimal('discount', 10, 2);
            $table->decimal('total', 10, 2);
            $table->timestamp('order_date')->useCurrent();
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
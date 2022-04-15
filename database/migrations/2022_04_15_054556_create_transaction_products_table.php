<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('transaction_products', function (Blueprint $table) {
            $table->foreignId('transaction_id')->constrained('transactions', 'id')->cascadeOnDelete();
            $table->foreignId('product_id')->nullable()->constrained('products', 'id')->nullOnDelete();
            $table->unsignedInteger('count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('transaction_products');
    }
};

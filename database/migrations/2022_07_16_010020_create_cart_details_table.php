<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained('carts')->onDelete('CASCADE');
            $table->foreignId('product_id')->constrained('products')->onDelete('CASCADE');
            $table->foreignId('size_id')->constrained('sizes')->nullable();
            $table->decimal('price', 16,2);
            $table->unsignedInteger('quantity')->default(1);
            $table->decimal('amount')->virtualAs('price * quantity');
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
        Schema::dropIfExists('cart_details');
    }
}

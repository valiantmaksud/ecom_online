<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('orders');

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('delivery_address_id')->constrained('delivery_addresses');
            // $table->foreignId('shipping_id')->constrained('delivery_addresses');
            $table->foreignId('coupon_id')->nullable()->constrained('coupons');
            $table->string('order_number')->nullable();
            $table->string('date');
            $table->string('delivery_date')->nullable();
            $table->string('delivery_time')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('payment_reference')->nullable();
            $table->decimal('subtotal', 10, 2)->default(0);
            $table->decimal('shipping_cost', 10, 2)->default(0);
            $table->decimal('coupon_cost', 10, 2)->default(0);
            $table->decimal('total', 10, 2)->virtualAs('subtotal + shipping_cost - coupon_cost');
            $table->decimal('paid_amount', 10, 2)->default(0);
            $table->decimal('due_amount', 10, 2)->virtualAs('total - paid_amount');
            $table->string('status')->default('pending');
            $table->string('notes')->nullable();
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
}

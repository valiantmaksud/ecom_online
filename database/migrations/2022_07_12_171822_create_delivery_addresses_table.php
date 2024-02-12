<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('district_id')->constrained('districts');
            $table->foreignId('thana_id')->constrained('thanas');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable(); 
            $table->string('state')->nullable();    
            $table->string('postal_code')->nullable();  
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('delivery_addresses');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceNosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('invoice_nos');

        Schema::create('invoice_nos', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('year');
            $table->unsignedInteger('next_id')->default(1);
            $table->unsignedBigInteger('company_id');
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
        Schema::dropIfExists('invoice_nos');
    }
}

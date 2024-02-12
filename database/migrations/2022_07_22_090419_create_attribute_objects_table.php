<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_objects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attribute_id')->constrained('attributes')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('bg_color')->nullable();
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
        Schema::dropIfExists('attribute_objects');
    }
}

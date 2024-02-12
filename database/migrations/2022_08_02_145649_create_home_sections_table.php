<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('home_sections');

        Schema::create('home_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->constrained('users')->nullable();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('type')->nullable();
            $table->tinyInteger('order')->default(99);
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
        Schema::dropIfExists('home_sections');
    }
}

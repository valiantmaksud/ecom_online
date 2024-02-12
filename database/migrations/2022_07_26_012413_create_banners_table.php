<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->string('heading')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->string('position')->comment('top,middle,bottom');
            $table->tinyInteger('is_exclusive')->default(0);
            $table->tinyInteger('trending')->default(0);
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
        Schema::dropIfExists('banners');
    }
}

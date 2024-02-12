<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sku')->nullable()->unique();
            $table->string('image')->nullable();
            $table->string('image_thumbnail')->nullable();
            $table->string('video_link')->nullable();
            $table->text('summary')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('price', 16, 2)->nullable();
            $table->decimal('offer_price', 16, 2)->default(0);

            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('featured')->default(0);
            $table->tinyInteger('featured_home')->default(0);
            $table->tinyInteger('featured_top')->default(0);
            $table->tinyInteger('featured_sidebar')->default(0);

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
        Schema::dropIfExists('products');
    }
}

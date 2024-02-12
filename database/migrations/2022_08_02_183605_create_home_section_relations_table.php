<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSectionRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('home_section_relations');

        Schema::create('home_section_relations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_section_id')->constrained('home_sections');
            $table->morphs('source');
            $table->tinyInteger('order')->default(99);
            $table->integer('limit')->default(5);
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
        Schema::dropIfExists('home_section_relations');
    }
}

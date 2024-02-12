<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('companies')) {
            Schema::create('companies', function (Blueprint $table) {
                $table->id();
                $table->foreignId('created_by')->constrained('users');
                $table->foreignId('updated_by')->nullable()->constrained('users');
                $table->string('name');
                $table->text('address')->nullable();
                $table->text('email')->nullable();
                $table->string('logo')->nullable();
                $table->string('phone')->nullable();
                $table->string('hotline')->nullable();
                $table->string('tax_number')->nullable();
    
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}

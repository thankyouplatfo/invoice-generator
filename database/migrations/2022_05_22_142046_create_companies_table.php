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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sub_address');
            $table->string('city');
            $table->string('district');
            $table->string('science');
            $table->string('phone_number_1');
            $table->string('phone_number_2');
            $table->string('tax_number')->unique();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete('cascade');
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
        Schema::dropIfExists('companies');
    }
}

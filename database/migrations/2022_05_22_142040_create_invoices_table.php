<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_type');
            $table->integer('quantity');
            //$table->string('notes');
            $table->decimal('total');
            $table->decimal('tax_value');
            $table->decimal('paid_up');
            $table->decimal('rest');
            $table->integer('payment_type');
            $table->decimal('net_tot');
            $table->string('special_number')->unique();
            $table->time('time_and_date');
            $table->foreignId('company_id')->references('id')->on('users')->cascadeOnDelete('cascade');
            $table->foreignId('customer_id')->references('id')->on('users')->cascadeOnDelete('cascade');
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
        Schema::dropIfExists('invoices');
    }
}

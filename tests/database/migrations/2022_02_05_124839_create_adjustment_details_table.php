<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdjustmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adjustment_details', function (Blueprint $table) {
            $table->id();
            $table->string('adjustment_id')->nullable();
            $table->string('products_id')->nullable();
            $table->string('kode_barang');
            $table->bigInteger('hpp')->default(0);
            $table->integer('in_stock')->nullable();
            $table->integer('actual_stock')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('adjustment_details');
    }
}

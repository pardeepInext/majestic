<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stokes', function (Blueprint $table) {
            $table->id();
            $table->integer('product_variant_id');
            $table->string('sku');
            $table->integer('unit_price')->nullable();
            $table->integer('total_price')->nullable();
            $table->string('stock');
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
        Schema::dropIfExists('stokes');
    }
}

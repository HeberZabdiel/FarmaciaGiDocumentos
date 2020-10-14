<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleProductoosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_productoos', function (Blueprint $table) {
           // $table->foreign('id')->references('id')->on('productoos');
           $table->foreignId('idProductos')->constrained('productoos');
            $table->string('codigo_barras')->unique();
            $table->integer('existencia');
            $table->string('imagen');
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
        Schema::dropIfExists('detalle_productoos');
    }
}

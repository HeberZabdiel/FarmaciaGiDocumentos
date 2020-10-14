<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraProductoosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_productoos', function (Blueprint $table) {
           // $table->foreign('id')->references('id')->on('compraas');
            $table->foreignId('idCompras')->constrained('compraas');
           // $table->foreign('id')->references('id')->on('productoos');
            $table->foreignId('idProductos')->constrained('productoos');
            $table->integer('cantidad');
            $table->integer('porcentaje_ganancia');
            $table->timestamp('fecha_caducidad');
            $table->double('costo_unitario');
            $table->string('iva');
            //$table->timestamp('fecha_registro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra_productoos');
    }
}

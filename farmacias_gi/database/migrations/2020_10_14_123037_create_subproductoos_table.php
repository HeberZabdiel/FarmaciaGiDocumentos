<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubproductoosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subproductoos', function (Blueprint $table) {
           // $table->foreign('id')->references('id')->on('productoos');
           // $table->foreign('id')->references('id')->on('productoos');
            $table->foreignId('idProductos')->constrained('productoos');
            $table->integer('piezas');
            $table->double('precio_ind');
            $table->string('descripcion');
            $table->string('medida');
            $table->integer('existencia');
            $table->double('ganancia');
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
        Schema::dropIfExists('subproductoos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->id();
            $table->string('cantidad_product');
            $table->string('Nombre_Product');
            $table->string('Descripcion_Product');
            $table->string('precio_De_compr');
            $table->string('precio_De_Vent');
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
        Schema::dropIfExists('inventario');
    }
};

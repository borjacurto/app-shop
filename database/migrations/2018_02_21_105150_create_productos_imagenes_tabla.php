<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosImagenesTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('producto_imagenes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('imagen');
            $table->boolean('destacada')->default(false);
            
            //FK
            $table->integer('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id')->on('products');

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
        Schema::dropIfExists('producto_imagenes');
    }
}

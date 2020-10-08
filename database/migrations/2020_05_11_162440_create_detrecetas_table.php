<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetrecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detrecetas', function (Blueprint $table) {
            $table->increments('id');
            $table->double('cantidad',10,2);
            $table->string('unidad_medida',100);

            $table->integer('id_ingredientes')->unsigned();
            $table->foreign('id_ingredientes')->references('id')->on('ingredientes');
            $table->integer('id_receta')->unsigned();
            $table->foreign('id_receta')->references('id')->on('recetas');
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
        Schema::dropIfExists('detrecetas');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuplementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suplementos', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('user_id')->unsigned()->index();
            // $table->string('imagePath');
            $table->string('nombre');
            //  $table->text('description');
            $table->integer('marca_id')->unsigned()->index();
            $table->integer('categoria_id')->unsigned()->index();
            //  $table->string('id_marca');
            $table->integer('cantidad');
            // $table->integer('cantidad_por_unidad');
            $table->float('precio_Compra');
            $table->float('precio_Venta');
            $table->integer('sabor_id')->unsigned()->index();
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
        Schema::dropIfExists('suplementos');
    }
}

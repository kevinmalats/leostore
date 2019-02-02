<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_productos', function (Blueprint $table) {
            $table->increments('id');
             $table->string('codigo',50)->unique();
            $table->string('nombre',150);
            $table->text('descripcion');
            
            $table->binary('imagen');
            $table->string('pathimage',200);
            $table->integer('stock')->unsigned()->default(0);
            $table->integer('categoria')->unsigned();
            $table->integer('precio');
            $table->foreign('categoria')->references('id')->on('tb_categorias')->onDelete('Cascade');
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
        Schema::dropIfExists('tb_productos');
    }
}

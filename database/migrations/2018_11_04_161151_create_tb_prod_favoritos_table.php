<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbProdFavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_prod_favoritos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email_usuario');
            $table->integer('producto');
             $table->foreign('email_usuario')->references('email')->on('tb_usuarios');
             $table->foreign('producto')->references('id')->on('tb_productos');
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
        Schema::dropIfExists('tb_prod_favoritos');
    }
}

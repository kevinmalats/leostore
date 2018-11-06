<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->increments('id');
             $table->string('login',50);
            $table->unique('login');
            $table->index('login');
            $table->string('nombre',150);
            $table->string('apellido',150);
            $table->string('direccion',150);
            $table->string('telefono',15);
            $table->string('email',150)->unique();
            $table->string('password',5000);
            $table->enum('estado',['A','I'])->default('A');
            $table->integer('rol')->unsigned()->default(1);
            $table->rememberToken(150);
            $table->string('api_token')->nullable()->change();

            $table->foreign('rol')->references('id')->on('tb_roles');
            //$table->string('email', 150);
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
        Schema::dropIfExists('tb_usuarios');
    }
}

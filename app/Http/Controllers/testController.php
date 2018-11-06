<?php

namespace App\Http\Controllers;

use App\model_rol;
use Illuminate\Http\Request;
use App\model_producto;


class testController extends Controller
{
    public function view($id){

    $productos = model_producto::find($id);
       $productos->categoriaProducto;
        //dd($productos);
        //retorno al inicio.blade el arreglo llamado variable cargado con productos.
        return view('res.inicio',['variable'=>$productos]);


    }




}

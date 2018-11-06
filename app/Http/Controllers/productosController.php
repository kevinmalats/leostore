<?php

namespace App\Http\Controllers;

use App\model_producto;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB; 
use Illuminate\Routing\Controller;
use Illuminate\Database\Query\Builder;



class productosController extends Controller
{
    //
     public function index()
    {
        //
         //
        $productos=model_producto::orderBy('codigo','ASC')->paginate(3);
        return view('Productos.index',compact('productos')); 
    }

    public function show()
    {
        $productos =  model_producto::orderBy('codigo','ASC')->paginate(4);


        return view('Productos.create')->with('productos',$productos);
        //dd($productos);

    }

    public function create()
    {
        $categorias=DB::table('tb_categorias')
       ->select('nombre','id')
       ->get();
        //dd('exito');
      //return view('deUsuario/crearUsuario');
        return view('Productos.create',[
	  		'categorias' => $categorias
	  	]);

    }




    public function store(Request $request)
    {
        $producto = new model_producto($request->all());

        $producto->save();




    }




}

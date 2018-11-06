<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\model_prod_favoritos;
use App\model_usuario;

class FavoritosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //
        $favoritos=model_prod_favoritos::orderBy('id','DESC')->paginate(3);
        return view('Favoritos.index',compact('favoritos')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
         $usuarios=DB::table('tb_usuarios')
       ->select('email')
       ->get();
        $productos=DB::table('tb_productos')
       ->select('nombre','id')
       ->get();
        //echo $usuarios->lenght();
        return view('Favoritos.create',[
	  		'usuarios' => $usuarios
	  	],[
	  		'productos' => $productos
	  	]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[ 'email_usuario'=>'required', 'producto'=>'required']);
        model_prod_favoritos::create($request->all());
        return redirect()->route('favoritos.index')->with('success','Registro creado satisfactoriamente');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $favoritoss=model_prod_favoritos::find($id);
        return  view('favoritos.show',compact('favoritos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $usuarios=DB::table('tb_usuarios')
       ->select('email')
       ->get();
        $productos=DB::table('tb_productos')
       ->select('nombre','id')
       ->get();
        $favoritos=model_prod_favoritos::find($id);
        return view('Favoritos.edit',[
	  		'favoritos' => $favoritos
	  	],[	'usuarios' => $usuarios
	  	]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $this->validate($request,[ 'email_usuario'=>'required', 'producto'=>'required']);
        model_prod_favoritos::find($id)->update($request->all());
        return redirect()->route('favoritos.index')->with('success','Registro actualizado satisfactoriamente');
 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        model_prod_favoritos::find($id)->delete();
        return redirect()->route('favoritos.index')->with('success','Registro eliminado satisfactoriamente');
    
    }
}

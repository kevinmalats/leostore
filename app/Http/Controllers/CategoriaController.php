<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model_categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categorias=model_categoria::orderBy('id','DESC')->paginate(3);
        return view('Categorias.index',compact('categorias')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $this->validate($request,[ 'email_usuario'=>'required', 'producto'=>'required']);
        model_categoria::create($request->all());
        return redirect()->route('Categorias.index')->with('success','Registro creado satisfactoriamente');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $categorias=model_categorias::find($id);
        return  view('Categorias.show',compact('categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $categorias=model_categoria::find($id);
        return view('Categorias.edit',compact('categorias'));
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
         model_categoria::find($id)->update($request->all());
        return redirect()->route('Categorias.index')->with('success','Registro actualizado satisfactoriamente');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       model_categoria::find($id)->delete();
        return redirect()->route('Categorias.index')->with('success','Registro eliminado satisfactoriamente');
    
    }
     
}

<?php

namespace App\Http\Controllers;

use Laracasts\Flash\Flash;
use App\model_producto;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Intervention\Image\Facades\Image;
use Illuminate\Validation\Validator;


class productosController extends Controller
{
    
    
      public function __construct()
    {
        $this->middleware('auth');

    }
    
public function princ(){
    $categorias=DB::table('tb_categorias')
       ->select('nombre','id')
       ->get();
        return view('producto.princ',[
	  		'categorias' => $categorias
	  	]);
}
    public function consultar(){
    //$categoria=$request["categoria"];
    $productos= DB::table('tb_productos')->where('categoria', 1)->paginate(6);
    $sections = $view->renderSections();
    //return $sections('contenpro');
}

    public function ver()
    {
        if(!isset($_GET["categoria"])){
            $productos =  model_producto::orderBy('codigo','ASC')->paginate(20);
        }else{
            
        $categoria=$_GET["categoria"]; 
    if($categoria=="todos"){
       $productos =  model_producto::orderBy('codigo','ASC')->paginate(20);  
    }else
       $productos=  model_producto::where('categoria',$categoria)->paginate(20);
    }
       
       
        return view('producto.catalogo')->with('productos',$productos);
    }
 

    public function destroy($id)
    {
        model_producto::find($id)->delete();

        Flash::warning("El producto codigo a sido borrado de forma exitosa..");

         return redirect()->route('producto.index')->with('success','Registro eliminado satisfactoriamente');
    
    }





}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model_categoria;
use App\model_rol;
use App\model_producto;
use App\model_prod_favoritos;
use DB;
use App\Http\Controllers\WebServices;

class practicaControler extends Controller
{
    //
    //public function view($id){

    //$categoria = model_categoria::find($id);
   // dd($categoria);

   // }
 
    
/**
     * Ejemplo de método REST 
     *
     * @return \Illuminate\Http\Response
     */
 
 public function deleteFavoritos(){
     $produc=$_GET['produc'];
     if(DB::table('tb_prod_favoritos')->where('id', '=', $produc)->delete()){
         echo "succes";
     }else
     echo "No";
     
 }  
/**
     * Ejemplo de método REST 
     *
     * @return \Illuminate\Http\Response
     */
 
    public function createProductosFavoritos(){
         $user=$_GET['user'];
         $producto=$_GET['producto'];

      $productos= DB::table('tb_prod_favoritos')->where([
        ['producto', '=', $producto],
        ['email_usuario', '=', $user],
       ])->get();
       
  if($productos=="[]"){
        $id = DB::table('tb_prod_favoritos')->insertGetId(
            array('email_usuario' => $user, 'producto' => $producto)
             );
             
             echo "ingreso_ok";
  }
  else
      echo "no_ingresado";
        
    }
   
/**
     * Ejemplo de método REST 
     *
     * @return \Illuminate\Http\Response
     */
 
    public function getProductosFavoritos(){
        $user=$_GET['user'];
        $favoritos=DB::table('tb_productos')
        ->join('tb_prod_favoritos', 'tb_productos.id', '=', 'tb_prod_favoritos.producto')
            ->select('tb_prod_favoritos.id', 'tb_productos.id  AS id_producto', 'tb_productos.pathimage', 'tb_productos.precio','tb_productos.nombre')
            ->where('email_usuario',$user)
            ->get();
        //$productos= DB::table('tb_productos')->where('categoria', $categoria)->get();
        
        return response()->json($favoritos);
    }
    
   
/**
     * Ejemplo de método REST 
     *
     * @return \Illuminate\Http\Response
     */
 
    public function getProductosCategoria(){
        $cat=$_GET['categoria'];
        
        $categoria=DB::table('tb_categorias')->where('nombre',$cat)->pluck('id');
        $productos= DB::table('tb_productos')->where('categoria', $categoria)->get();
        
        return response()->json($productos);
    }
    
/**
     * Ejemplo de método REST 
     *
     * @return \Illuminate\Http\Response
     */
 
    public function getProductos(){
        $productos=model_producto::all();
        return response()->json($productos);
    }

    public function view($id){

        $roles = model_rol::find($id);
        return view('res.inicio2',['var'=>$roles]);

    }
    

/**
     * Ejemplo de método REST 
     *
     * @return \Illuminate\Http\Response
     */
 
    public function getCategorias(){
        $categoria=model_categoria::all();
        return response()->json($categoria);
    }
    
    public function getEc(){
        
        include_once 'WebServices/WebServiceManagerCurl.php';

      $webService = new WebServiceManagerCurl('https://spotifycharts.com/regional/ec/daily/latest/download');
      
      
      
      
      $webService->get();
      $webServicel = new WebServiceManagerCurl('https://spotifycharts.com/regional/global/daily/latest/download');
      
      $webServicel->get();
      // return view('producto.artistasTest')->with('productos',$webService);
        
    }
   public function getGlobal(){
    
}
public function indexTest(){
   return view('producto.indexTest');
    
}
}

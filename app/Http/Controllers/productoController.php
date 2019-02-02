<?php

namespace App\Http\Controllers;


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

class productoController extends Controller
{

    public function index()
    {

        //$productos =  model_producto::orderBy('codigo','ASC');
         $productos =  model_producto::orderBy('codigo','ASC')->paginate(4);
         
       // $categoria=$productos->model_categoria;
      

       return view('producto.index')->with('productos',$productos);

    }

    public function create()
    {
        $categorias=DB::table('tb_categorias')
       ->select('nombre','id')
       ->get();
        $productos =  model_producto::orderBy('codigo','ASC')->paginate(4);
       // return view('producto.producto')->with('productos',$productos);
        return view('producto.producto',[
	  		'categorias' => $categorias
	  	])->with('productos',$productos);
        //dd($productos);

    }

    public function __construct()
    {
        $this->middleware('auth');

    }
     public function edit($id)
    {
        $categorias=DB::table('tb_categorias')
       ->select('nombre','id')
       ->get();
        $productos=model_producto::find($id);
        return view('producto.editar',compact('productos'),compact('categorias'));
    }
public function update(Request $request, $id)
    {
        //model_producto::find($id)->update($request->all());
          //$cod = model_producto::where('codigo','=',($request['codigo']))->first();
   
      if($_FILES['imagepath']['name']!=''){

      // echo "imagepatheeee";
       $file = Input::file('imagepath');
        $random = str_random(10);
       $nombre = $random.'-'.$file->getClientOriginalName();
       
       $path = 'img/'.$nombre;
       $url = 'img/'.$nombre;
       $image = Image::make($file->getRealPath())->resize(150, 150);

       $image->save($path);
        $image->encode('data-url');

      $img_data = file_get_contents($path);



      $image = base64_encode($img_data);
      $producto=model_producto::find($id);
      $producto->pathimage = $url;
       $producto->save();

       //$producto->imagen = $image;
       }
    
    model_producto::find($id)->update($request->all());
   
   
    //flash('Registrado')->success();
   
    //return redirect()->route('producto');
    return redirect()->route('producto.index')->with('success','Registro actualizado satisfactoriamente');
 
    }
    public function show()
    {
        //$productos =  model_producto::orderBy('codigo','ASC');
         $productos =  model_producto::orderBy('codigo','ASC')->paginate(4);
         
       // $categoria=$productos->model_categoria;
      

       return view('producto.index')->with('productos',$productos);
    }



    public function destroy($id)
    {
        model_producto::find($id)->delete();

        Flash::warning("El producto codigo a sido borrado de forma exitosa..");

         return redirect()->route('producto.index')->with('success','Registro eliminado satisfactoriamente');
    
    }



   

    public function store(Request $request)
    {

   /* $v = $request->validate([

        'codigo'    => 'required|unique:tb_productos',

    ]);


    if ($v->fails())
    {
        return redirect()->back()->withInput()->withErrors($v->errors());
        //Flash::error("Código de producto ya existe, ingrese el correcto..");
    }*/
     $cod = model_producto::where('codigo','=',($request['codigo']))->first();
    if($cod!=null){
        Flash::error("C��digo de producto ya existe, ingrese el correcto..");
        return redirect()->route('producto');

    }
   else
   {

       $producto = new model_producto($request->all());

       $file = Input::file('imagepath');
       $random = str_random(10);
       $nombre = $random.'-'.$file->getClientOriginalName();
       $path = 'img/'.$nombre;
       $url = 'img/'.$nombre;
       $image = Image::make($file->getRealPath())->resize(150, 150);

       $image->save($path);
       // $image->encode('data-url');

       $img_data = file_get_contents($path);



       $image = base64_encode($img_data);
    $producto->pathimage = $url;
    $producto->imagen = $image;
    $producto->codigo;
    $producto->nombre;
    $producto->descripcion;
    $producto->precio;
    $producto->categoria;
    $producto->save();

    //flash('Registrado')->success();
    Flash::success("Registro de producto satisfactorio!!");

    return redirect()->route('producto.index');

   }
    //return $this->index();










    }



}

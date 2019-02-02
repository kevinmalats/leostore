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
use Intervention\Image\Facades\Image;
use Illuminate\Validation\Validator;

class productoController extends Controller
{

    public function index()
    {

        $productos =  model_producto::orderBy('codigo','ASC')->paginate(4);

        $categoria= $productos->categoriaProducto;
        //$productos = model_producto::paginate(5);

        return view('producto.producto')->with('productos',$productos, 'categoria',$categoria);

            //view('producto.producto')->with('productos',$productos);

        //$this->layout->content = View::make('frontend.premios')
           // ->with('premiostexto',PremiosTexto::all())
          //  ->with('premios', Premios::orderBy('ordem', 'ASC')->paginate(5));


    }


    public function create()
    {
        $productos =  model_producto::orderBy('codigo','ASC')->paginate(4);
       // return view('producto.producto')->with('productos',$productos);
        return view('producto.producto')->with('productos',$productos);
        //dd($productos);

    }

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function show()
    {
        $productos =  model_producto::orderBy('codigo','ASC')->paginate(8);


        return view('producto.listaproducto')->with('productos',$productos);
    }



    public function ver()
    {
        $productos =  model_producto::orderBy('codigo','ASC')->paginate(6);


        return view('producto.catalogo')->with('productos',$productos);
    }

   public function UploadImage(Request $request)
{


    $v = $request->validate([

        'codigo'    => 'required|unique:tb_productos',

    ]);


    if ($v->fails())
    {
        return redirect()->back()->withInput()->withErrors($v->errors());
        //Flash::error("Código de producto ya existe, ingrese el correcto..");
    }
   else
   {

       $producto = new model_producto($request->all());

       $file = Input::file('imagepath');
       $random = str_random(10);
       $nombre = $random.'-'.$file->getClientOriginalName();
       $path = public_path('img/'.$nombre);
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

    return redirect()->route('producto');

   }
    //return $this->index();








}

    public function store(Request $request)
    {

        $producto = new model_producto($request->all());
        $producto->pathimage = \Symfony\Component\Process\getInput();
        $producto->codigo = 'codigo';
        $producto->descripcion = 'descripcion';
        $producto->precio = 'precio';
        $producto->categoria = 'categoria';



        $producto->save();





    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\User;
use Illuminate\Support\Facades\Hash;
class usuarioController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        
        $usuarios=User::orderBy('id','DESC')->paginate(3);
       // $usuarios=User::first();
        //dd($usuarios->model_rol->descripcion);
        return view('Usuarios.index',compact('usuarios')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
         $roles=DB::table('tb_roles')
       ->select('id','descripcion')
       ->get();
        
        return view('Usuarios.create',[
	  		'roles' => $roles]);
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
        /* return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);*/
        $this->validate($request,[ 'email'=>'required|string|email|max:255|unique:tb_usuarios',
        'login' => 'required|string|max:255|unique:tb_usuarios',
         'password' => 'required']);
        //$request["password"]=Hash::make($request['password']);
       // echo $request["password"];
        User::create([
            'nombre' => $request['nombre'],
            'email' => $request['email'],
            'direccion' => $request["direccion"],
            'telefono' => $request["telefono"],
            'login' => $request["login"],
            'apellido' => $request['apellido'],
            'rol' => $request['rol'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('usuario.index')->with('success','Registro creado satisfactoriamente');
    
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
        $usuarios=User::find($id);
        return  view('Usuarios.show',compact('usuarios'));
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
        $roles=DB::table('tb_roles')
       ->select('id','descripcion')
       ->get();
        $usuario=User::find($id);
        return view('Usuarios.edit',compact('usuario'),
        compact('roles'));
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
         $this->validate($request,[ 'email'=>'required|string|email|max:255',
        'login' => 'required|string|max:255',
         'password' => 'required']);
         
         $request['password'] = Hash::make($request['password']);
        User::find($id)->update($request->all());
        return redirect()->route('usuario.index')->with('success','Registro actualizado satisfactoriamente');
 
        
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
        User::find($id)->delete();
        return redirect()->route('usuario.index')->with('success','Registro eliminado satisfactoriamente');
    
    }
}

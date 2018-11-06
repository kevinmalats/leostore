<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Routing\Controller;
use App\User;

class usuariosController extends Controller
{
    //

    public function create()
    {
        //dd('exito');
      //return view('deUsuario/crearUsuario');
        return view('deUsuario/crearUsuario');

    }
    public function index()
    {



    }
    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();


        //$user->save();
        //dd($user);


    }




}

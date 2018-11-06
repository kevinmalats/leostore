<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    public function __construct()
    {

        $this->middleware('guest',['only'=>'showLoginForm']);

    }

    public function showLoginForm()
    {

        return view('res.login');


    }

    public  function  logout()
    {

        Auth::logout();
        return redirect('/');





    }


    public function login()
    {


        $datosUsuario = $this->validate(request(),[
            'email' => 'email|required|string',
            'password' => 'required|string'

        ]);

       //Hash::make($data['password']

        //return Hash::make($datosUsuario['password']);
       if (Auth::attempt($datosUsuario))
        {
            return redirect()->route('inicio');


        }
        else{

             //return dd(bcrypt('password'));
             return back()
             ->withErrors(['email'=>trans('auth.failed')])
             ->withInput(request(['email']));


        }
    }

}

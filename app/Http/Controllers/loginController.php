<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use DB;
use App\model_usuario;



class loginController extends Controller
{
   
   /**
     * Ejemplo de método REST 
     *
     * @return \Illuminate\Http\Response
     */
 
    public function login()
    {  
       //echo $_GET['login'];

        $login=$_GET['login'];
        $pass=$_GET['password'];
        
        $datosUsuario =['email'=>$login,'password'=>$pass];
        

          /*$datosUsuario = $this->validate([
            $login => 'email|required|string',
            $pass => 'required|string'

        ]);*/

       //Hash::make($data['password']

        //return Hash::make($datosUsuario['password']);
       if (Auth::attempt($datosUsuario))
        {
            echo "login_ok";


        }
        else{

             echo 'error_login';


        }
        
       /* $user = DB::table('tb_usuarios')->where('email', $login)->where('password', $pass)->get();
        
        if(count($user)>0){
            echo "login_ok";
            
       
        }else{
            
        echo 'error_login';
        echo 'user'.$login;
        echo 'password'. $password;
        echo 'pass'. $pass;
        }
      
/*
       $datosUsuario = $this->validate(request(),[
            'login' => 'login|required|string',
            'password' => 'required|string'

       ]);*/


        //return $datosUsuario;
        //Auth::attempt($datosUsuario);
    }
    
  
}

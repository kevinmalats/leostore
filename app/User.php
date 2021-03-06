<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;



    public $remember_token = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido','login', 'direccion','telefono','email', 'password','rol','updated_at','created_at'
    ];


    protected $table = 'tb_usuarios';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
     public function model_rol (){
        return $this->belongsTo("App\model_rol", 'rol');
    }
}

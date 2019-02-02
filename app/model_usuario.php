<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_usuario extends Model
{
    protected $table = "tb_usuarios";
    protected $fillable = ['email','paswword','rol', 'telefono', 'direccion', 'created_at', 'updated_at', 'login'];
    
   
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_rol extends Model
{
    protected $table = "tb_roles";
    protected $fillable = ['descripcion','created_at','updated_at'];
    public function users (){
        return $this->hasMany("App\User");
    }
}

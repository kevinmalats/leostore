<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_producto extends Model
{
    protected $table = "tb_productos";
    protected $fillable = ['codigo','nombre','descripcion','precio','categoria','imagen','pathimage','updated_at','created_at'];


   public function categoriaProducto()
  {
        return $this->belongsTo('App\model_categoria','categoria');
  }

}

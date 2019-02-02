<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_producto extends Model
{
    protected $table = "tb_productos";
    protected $fillable = ['codigo','nombre','descripcion','precio','categoria','imagen','pathimage','updated_at','created_at'];


   public function model_categoria()
  {
        return $this->belongsTo('App\model_categoria','categoria');
  }
    public function model_favorito()
  {
        return $this->hasOne('App\model_catmodel_favoritosegoria');
  }
  

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class model_categoria extends Model
{
    protected $table = "tb_categorias";
    protected $fillable = ['nombre','observacion','estado','created_at','updated_at'];

    public function productos()
    {
        return $this->hasMany('App\model_producto');
    }


}

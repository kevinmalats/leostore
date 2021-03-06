<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_prod_favoritos extends Model
{
    protected $table = "tb_prod_favoritos";
    protected $fillable = ['email_usuario','producto','created_at','updated_at'];

    public function model_producto()
    {
        return $this->belongsTo('App\model_producto','producto');
    }


}

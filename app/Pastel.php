<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pastel extends Model
{
     protected $table = "tb_pastel";
    protected $fillable = ['nombre','descripcion','created_at','updated_at'];

}

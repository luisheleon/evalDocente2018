<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    //
    protected $table = "perfil";
    protected  $fillable = ['perfil','sede_id'];

}

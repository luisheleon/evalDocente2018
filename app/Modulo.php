<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    //
    protected $table = "modulos";
    protected  $fillable = ['modulo','image','orden'];


    public function pagina()
    {
        return $this->hasMany('App\Pagina');
    }
}

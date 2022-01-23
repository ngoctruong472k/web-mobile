<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $primaryKey = "ID";
    public $timestamps = false;
    public function manu(){
        return $this->belongsTo('App\Manufactures','manu_ID');
    }
    public function type(){
        return $this->belongsTo('App\Protypes','type_ID');
    }
}

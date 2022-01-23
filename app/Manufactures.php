<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufactures extends Model
{
    public $primaryKey = "manu_ID";
    public $timestamps = false;
    public function product(){
        return $this->hasMany('App\Products','manu_ID','manu_ID');
    }
}

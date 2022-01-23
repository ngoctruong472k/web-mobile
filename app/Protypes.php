<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protypes extends Model
{
    protected $table = "protypes";
    public $primaryKey = "type_ID";
    public $timestamps = false;
    public function product(){
        return $this->hasMany('App\Products','type_ID','type_ID');
    }
}

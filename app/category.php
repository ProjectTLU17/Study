<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table='category';
    protected $fillable=['id','name'];
    public $timestamps=false;
    public function product(){
      return $this->hasMany('App\product');
    }
}

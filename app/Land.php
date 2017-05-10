<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    protected $table='land';
    protected $fillable=['name','stock'];
    public function project(){
      return $this->belongsTo('App/Project');
    }
    public function product(){
      return $this->hasMany('App/Product');
    }
}

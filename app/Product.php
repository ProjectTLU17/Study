<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    protected $fillable=['suplier','category_id','land_id','name','address','decription','price','status'];
    public function suplier(){
      return $this->belongsTo('App/Suplier');
    }
    public function contract(){
      return $this->hasMany('App/Contract');
    }
    public function images(){
      return $this->hasMany('App/Images');
    }
    public function land(){
      return $this->belongsTo('App/Land');
    }
}

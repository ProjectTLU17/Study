<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    protected $fillable=['sup_id','cate_id','name','address','details','images','price','status'];
    public function suplier(){
      return $this->belongsTo('App/Suplier');
    }
    public function contract(){
      return $this->hasMany('App/Contract');
    }
}

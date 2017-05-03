<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    protected $fillable=['sup_id','cate_id','name','address','details','picture','price','status'];
    public function suplier(){
      return $this->belongsTo('App/suplier');
    }
}

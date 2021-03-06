<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    protected $fillable=['suplier_id','category_id','land_id','name','address','decription','price','status'];
    public $timestamps=false;
    public function suplier(){
      return $this->belongsTo('App\Suplier');
    }
    public function category(){
      return $this->belongsTo('App\Category');
    }
    public function contract(){
      return $this->hasMany('App\Contract');
    }
    public function images(){
      return $this->hasMany('App\Images');
    }
    public function land(){
      return $this->belongsTo('App\Land');
    }
}

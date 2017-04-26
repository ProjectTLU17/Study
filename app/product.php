<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
  protected $table='product';
  protected $fillable=['id','name','price','category_id'];
  public $timestamps=false; // không hiên thị timestamps
  public function category(){
    return $this->belongsTo('App\category');
  }
}

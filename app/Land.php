<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
  protected $table='land';
  protected $fillable=['project_id','name','stock'];
  public function product(){
    return $this->hasMany('App\Product');
  }
  public function project(){
    return $this->belongsTo('App\Project');
  }
}

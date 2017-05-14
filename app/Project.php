<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $table='project';
  protected $fillable=['name','decription','startdate','expdate'];
  public $timestamps=false;
  public function land(){
    return $this->hasMany('App\Land');
  }
}

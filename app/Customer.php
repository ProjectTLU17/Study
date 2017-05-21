<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customer';
    protected $fillable=['name','phone','email'];
    public $timestamps=false;
    public function contract(){
      return $this->hasMany('App\Contract');
    }
}

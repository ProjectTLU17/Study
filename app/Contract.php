<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table='contract';
    protected $fillable=['name','type','customer_id','users_id','product_id','decription','startdate','expdate','status'];
    public $timestamps=false;
    public function product(){
      return $this->belongsTo('App\Product');
    }
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function customer(){
      return $this->belongsTo('App\Customer');
    }
}

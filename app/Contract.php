<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table='contract';
    protected $fillable=['cus_id','emp_id','prodt_id','details','startdate','expdate','status'];
    public function product(){
      return $this->belongsTo('App/Product');
    }
    public function user(){
      return $this->belongsTo('App/User');
    }
    public function customer(){
      return $this->belongsTo('App/Customer');
    }
}

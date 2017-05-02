<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table='order';
    protected $fillable=['cus_id','emp_id','sup_id','startdate','expdate','status'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    protected $table='contract';
    protected $fillable=['cus_id','emp_id','prodt_id','details','startdate','expdate','status'];
}

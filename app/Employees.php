<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
  protected $table='employee';
  protected $fillable=['name','birthday','address','phone','email'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supliers extends Model
{
  protected $table='suplier';
  protected $fillable=['name','address','phone','email'];
}

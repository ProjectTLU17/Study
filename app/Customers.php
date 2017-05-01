<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table='customer';
    protected $fillable=['name','address','phone','email'];
    public function (){};
}

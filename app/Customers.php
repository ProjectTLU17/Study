<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table='customer';
    protected $fillable=['name','phone','email'];
    public function (){};
}

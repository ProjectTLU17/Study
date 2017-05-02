<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table='product';
    protected $fillable=['sup_id','cate_id','name','address','details','picture','price','status'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table='images';
    protected $fillable = ['product_id','name'];
    public function product(){
      return $this->belongsTo('App\Product');
    }
}

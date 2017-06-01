<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestDuy extends Model
{
    //
    protected $table='TestDuy';
    protected $fillable=['id','monhoc','giatien'];
    public $timestamps=false; // không hiên thị timestamps
}

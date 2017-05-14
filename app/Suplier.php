<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Suplier extends Model
{
  protected $table='suplier';
  protected $fillable=['name','address','phone','email'];
  public $timestamps=false;
  public function product(){
    return $this->hasMany('App/Product');
  }
}

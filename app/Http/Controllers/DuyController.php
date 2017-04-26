<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Http\Requests\Duyrequest;
class DuyController extends Controller
{
    //
    public function index(){
      echo "day la trang list";
    }
    public function create(){
      echo "tao du lieu";
    }
    public function add(Duyrequest $Request){

      // $product=new category;
      // $product->name=$Request->txtHoten;
      // $product->save();
      // return redirect('form/layout');
      $des='upload/images';
      $img_name=$Request->file('img')->getClientOriginalName();
      $Request->file('img')->move($des,$img_name);
    }

}

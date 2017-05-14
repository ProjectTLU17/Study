<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImagesRequest;
use App\Images;
class ImagesController extends Controller
{
    public function store($product_id,ImagesRequest $fimages){
      $des='upload/images';
      foreach ($fimages as $image) {
        $img_name=$image->getClientOriginalName();
        $image->move($des,$img_name);
        Images::create([
          'product_id'=>$product_id,
          'name'=>$img_name,
        ]);
    }
    return "Thành công";
  }
}

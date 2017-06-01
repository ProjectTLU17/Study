<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Contract;
class StatisticController extends Controller
{
    public function index(){
      $category=Category::all();
      $contract=Contract::with('product')->get();
      //đếm thống kê số lượng sản phẩm
      $totalproduct=Product::all()->count();
      $availproduct=Product::where('status','available')->count();
      $rentproduct=Product::where('status','rent')->count();
      $soldproduct=Product::where('status','sold')->count();
      $pendingproduct=Product::where('status','pending')->count();
      // tính doanh thu theo loại sản phẩm
      $valuesold1 = Product::whereStatusAndCategory_id('sold','1')->sum('price');
      $valuesold2 = Product::whereStatusAndCategory_id('sold','2')->sum('price');
      $valuesold3 = Product::whereStatusAndCategory_id('sold','3')->sum('price');
      $valuesold4 = Product::whereStatusAndCategory_id('sold','4')->sum('price');
      $valuerent1 = Product::whereStatusAndCategory_id('rent','1')->sum('price');
      $valuerent1 =$valuerent1*30/100;
      $valuerent2 = Product::whereStatusAndCategory_id('rent','2')->sum('price');
      $valuerent2 =$valuerent2*30/100;
      $valuerent3 = Product::whereStatusAndCategory_id('rent','3')->sum('price');
      $valuerent3 =$valuerent3*30/100;
      $valuerent4 = Product::whereStatusAndCategory_id('rent','4')->sum('price');
      $valuerent4 =$valuerent4*30/100;
      $valuesold = [$valuesold1, $valuesold2, $valuesold3, $valuesold4 ];
      $valuerent = [$valuerent1, $valuerent2, $valuerent3, $valuerent4 ];
      return view('template.statistic',compact(['totalproduct','availproduct','rentproduct','soldproduct','pendingproduct','valuesold','valuerent','category','contract']));
    }
}

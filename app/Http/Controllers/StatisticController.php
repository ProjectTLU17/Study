<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class StatisticController extends Controller
{
    public function index(){
      //đếm thống kê số lượng sản phẩm
      $totalproduct=Product::all()->count();
      $availproduct=Product::where('status','available')->count();
      $rentproduct=Product::where('status','rent')->count();
      $soldproduct=Product::where('status','sold')->count();
      return view('template.statistic',compact(['totalproduct','availproduct','rentproduct','soldproduct']));
    }
}

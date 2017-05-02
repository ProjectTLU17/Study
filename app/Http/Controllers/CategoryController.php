<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;
class CategoryController extends Controller
{
  public function index(){
    $category=Category::all();
    return view('dashbroad.category-index',compact('category'));
  }
  public function store(CategoryRequest $Request){
    $category=new Category;
    $category->name=$Request->name;
    $category->stock=$Request->stock;
    $category->save();
    return redirect()->route('category.index');
  }
  public function create(){
    return view('dashbroad.category-create');
  }
  public function show($id){
    $category=Category::find($id);
    return view('dashbroad.category-details',compact('category'));
  }
  public function update($id,CategoryRequest $Request){
      $category=Category::find($id);
      $category->name=$Request->name;
      $category->stock=$Request->stock;
      $category->save();
      return redirect()->route('category.index');
  }
  public function destroy($id){
    $category=Category::findorFail($id);
    $category->delete();
    return redirect()->route('category.index');
  }
  public function edit($id){
    $category=Category::find($id);
    return view('dashbroad.category-edit',compact('category'));
  }
}

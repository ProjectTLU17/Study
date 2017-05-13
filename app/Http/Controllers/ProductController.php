<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Land;
use App\Category;
use App\Project;
use App\Suplier;
use App\Http\Controllers\ImagesController;
use Input;
class ProductController extends Controller
{
  public function index(){
    $product=Product::with(['images','land','suplier'])->get();
    return view('dashbroad.product-index',compact('product'));
  }
  public function store(ProductRequest $Request){
    $product=new Product;
    $product->suplier_id=$Request->suplier_id;
    $product->category_id=$Request->category_id;
    $product->land_id=$Request->land_id;
    $product->name=$Request->name;
    $product->address=$Request->address;
    $product->decription=$Request->decription;
    $product->price=$Request->price;
    $product->status=$Request->status;
    $product->save();
    //cách viết khác để thử $product=Product::create($Request->all());
    //xử lý thêm ảnh
    $product_id=$product->id;
    if (count($Request->fimages)>0) {
      $des='upload/images';
      foreach ($Request->fimages as $image) {
        $img_name=$image->getClientOriginalName();
        $image->move($des,$img_name);
        Images::create([
          'product_id'=>$product_id,
          'name'=>$img_name,
        ]);
      }
    }
    //kết thúc xử lý thêm ảnh
    return redirect()->route('product.show',$product_id);
  }
  public function create(){
    $category=Category::all();
    $project=Project::with('land')->get();
    $suplier=Suplier::all();
    return view('dashbroad.product-create',compact(['category','project','suplier']));
  }
  public function show($id){
    $product=Product::find($id)->with(['images','land','suplier'])->get();
    return view('dashbroad.product-details',compact('product'));
  }
  public function update($id,ProductRequest $Request){
      $product=Product::find($id);
      $img_name=$Request->file('img')->getClientOriginalName();
      $product->sup_id=$Request->sup_id;
      $product->cate_id=$Request->cate_id;
      $product->name=$Request->name;
      $product->address=$Request->address;
      $product->details=$Request->details;
      $product->images=$img_name;
      $product->price=$Request->price;
      $product->status=$Request->status;
      $product->save();
      $des='upload/images';
      $Request->file('images')->move($des,$img_name);
      return redirect()->route('product.index');
  }
  public function destroy($id){
    $product=Product::findorFail($id);
    File::delete('upload/images/'.$product->images);
    $product->delete();
    return redirect()->route('product.index');
  }
  public function edit($id){
    $product=Product::find($id);
    return view('dashbroad.product-edit',compact('product'));
  }
}

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Land;
use App\Category;
use App\Project;
use App\Suplier;
use App\Images;
use Response;
class ProductRAController extends Controller
{
  public function uploadimg(ImagesController $img){
    return $img->store();
  }
  public function index(){
    // $product=Product::with(['images','land','suplier','category'])->get();
    // return view('dashbroad.product-index',compact('product'));
    $category=category::with('product')->get();
    //return view('dashbroad.product-index',compact('category'));
    return response::json($category);
  }
  public function store(ProductRequest $Request){
    $product=Product::create($Request->all());
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
    $product=Product::with(['images','land','suplier'])->where('id',$id)->first();
    return response::json($product);
  }
  public function update(ProductRequest $Request,$id){
      $product=Product::find($id);
      $product->suplier_id=$Request->suplier_id;
      $product->category_id=$Request->category_id;
      $product->land_id=$Request->land_id;
      $product->name=$Request->name;
      $product->address=$Request->address;
      $product->decription=$Request->decription;
      $product->price=$Request->price;
      $product->status=$Request->status;
      $product->save();
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
      return Response::json(array(
                  'error' => false,
                  'message' =>'Cập nhật user thành công',
                 ),200);
  }
  public function destroy($id){
    $product=Product::findorFail($id);
    foreach ($product->images as $img) {
      unlink('upload/images/'.$img->name);
    }
    $images=Images::where('product_id',$product->id)->delete();
    $product->delete();
    return Response::json(array(
                'error' => false,
                'message' =>'Xóa user thành công',
               ),200);
  }
  public function edit($id){
    $project=Project::with('land')->get();
    $suplier=Suplier::all();
    $product=Product::with(['images','land','suplier','category'])->where('id',$id)->first();
    return Respone::json([$product,$suplier,$project]);
  }
}

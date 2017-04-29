<?php namespace App\Http\Controllers;
use...
class ArticlesController extends Controller {

  public function index(){
    $articles = Article::all();
    return view('articles.index',compact('artical'))
  }

  public function show($id){
    $articles = Article::findOrFail($id);
    return view('articles.show',compact('articale'))
  }

  public function create(){
    return view('articles.create')
  }

  public function store(){

    Article::create(Request::all());
    return redirect('articales');
  }
}
?>

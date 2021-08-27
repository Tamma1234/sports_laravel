<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\GalleryProduct;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::where('parent_id','=',null)->get();
        $product = Product::all();
       return view('client.home.index',compact('product','category'));
    }

    public function show(Request $request)
    {       
         $product = Product::find($request->id);
        $category = Category::all();
        $size = Size::all();
        $gallery = GalleryProduct::where('product_id',$product->id)->get();
        // echo '<pre>';
        // var_dump($gallery);die;
        return view('client.product.detail',compact('product','category','gallery','size'));
    }
}

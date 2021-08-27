<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductRequest;


use App\Models\Product;
class ProductController extends Controller
{
    // Hàm lấy ra tất cả sản phẩm rồi chuyền đến view 
    public function index()
    {
        $product = Product::orderBy('id','desc')->Paginate(5);
        return view('admin.product.index',compact('product'));
    }

    // Tạo hàm create lấy ra danh mục và thuộc tính của sp rồi chuyền đến view create
    public function create()
    {
        $category = Category::all();
        $color = Color::all();
        $size = Size::all();
        return view('admin.product.create',compact('category','color','size'));
    }

    // Hàm thêm sản phẩm nên db 
    public function store(Request $request)
    {
           //dd($request->all());
        $product = new Product();
        $product->saveAdd($request);
        // // var_dump($product);die;
           return redirect()->route('product.index');
    }
    // Tạo hàm edit(sửa) product 
    public function edit(Request $request)
    {
        
        $category = Category::all();
        $color = Color::all();
        $size = Size::all();
        $product = Product::find($request->id);
        return view('admin.product.edit',compact('category','product','color','size'));

    }
    // Tạo hàm update(cập nhập) sản phẩm
    public function update(ProductRequest $request)
    {
           //dd($request->all());
        $product = new Product();
        $product->saveEdit($request);
        // // var_dump($product);die;
        return redirect()->route('product.index')
        ->with('msg', 'Cập nhật thành công');
    }

    // Tạo hàm xóa(remove) sản phẩm 
    public function delete(Request $request)
    {
        $product = Product::find($request->id);
        // var_dump($request->id);die;
        Storage::disk('public')->delete($product->image_url);
        $product->delete();
        return redirect()->route('product.index')->with('msg', 'Xóa danh mục thành công');
    }

    // public function deleteAll(Request $request,$ids=[])
    // {
    //     // $list = $request->ids;
    //     // var_dump($ids=[]);die;
    //     $product = Product::find($request->id);
    //     $ids = $product->ids;
    //     var_dump($ids);die;
    //     Storage::disk('public')->delete($product->image_url);
    //     $product->delete();
    //     return redirect()->route('product.index');
    // }
}

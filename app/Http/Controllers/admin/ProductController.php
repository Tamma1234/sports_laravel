<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use App\Models\Size;
use App\Models\Product;
use App\Models\Category;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\EditProductRequest;



class ProductController extends Controller
{

    //Tạo Hàm index lấy ra tất cả sản phẩm rồi chuyền đến view list 
    public function index()
    {
        $product = Product::orderBy('id', 'desc')->Paginate(5);
        return view('admin.products.index', compact('product'));
    }

    // Tạo hàm create lấy ra sản phẩm(product) và thuộc tính của sp cần thêm rồi chuyền đến view create
    public function create()
    {
        $category = Category::all();
        $color = Color::all();
        $size = Size::all();
        return view('admin.products.create', compact('category', 'color', 'size'));
    }

    // Tạo hàm store để lưu sản phẩm khi thêm với tham số truyền vào là ProductRequest(validate), $request 
    // Gọi hàm saveAdd($request) trong Models Product để lưu data 
    // Sau đó chuyển hướng về product.index
    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->saveAdd($request);
        return redirect()->route('product.index')->with('msg', 'Thêm sản phẩm thành công');
    }
    // Tạo hàm create để thêm sản phẩm(product), truyền tham số request để lấy data 
    // Trả về form create trong view admin.product.edit
    public function edit(Request $request)
    {
        $category = Category::all();
        $color = Color::all();
        $size = Size::all();
        $product = Product::find($request->id);
        return view('admin.products.edit', compact('category', 'product', 'color', 'size'));
    }

    // Tạo hàm update để lưu sản phẩm khi sửa với tham số truyền vào là ProductRequest(validate), $request 
    // Gọi hàm saveEdit($request) trong Models Product để lưu data 
    // Sau đó chuyển hướng về product.index
    public function update(EditProductRequest $request)
    {
        $product = new Product();
        $product->saveEdit($request);
        return redirect()->route('product.index')
            ->with('msg', 'Cập nhật thành công');
    }

    // Tạo hàm xóa(remove) sản phẩm 
    public function delete(Request $request)
    {
        $product = Product::find($request->id);
        $bill = $product->billDetail;
        // var_dump($request->id);die;
        Storage::disk('public')->delete($product->image_url);
        $product->delete();
        return redirect()->route('product.index')->with('msg', 'Xóa sản phẩm thành công');
    }
}

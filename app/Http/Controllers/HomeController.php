<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Category;
use App\Models\Color;
use App\Models\GalleryProduct;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Tạo hàm index để hiển thị lost product trên trang sản phẩm
    public function index()
    {
        $category = Category::where('parent_id', '=', null)->get();
        $product = Product::orderBy('id', 'desc')->Paginate(8);
        return view('client.home.index', compact('product', 'category'));
    }

    // Tạo hàm detail để show chi tiết product(sản phẩm)
    // Truyển tham số request vào để lấy data 

    public function detail(Request $request)
    {
        $product = Product::find($request->id);
        $cate = $product->hasCate->id;
        $product_related = Category::find($cate)->hasProducts;
        $category = Category::where('parent_id', '=', null)->get();
        $size = Size::all();
        $gallery = GalleryProduct::where('product_id', $product->id)->get();
        return view('client.product.detail', compact('product', 'category', 'gallery', 'size', 'product_related'));
    }

    public function saveCart(Request $request )
    {
        // $category = Category::where('parent_id','=',null)->get();
        $product = Product::find($request->id);
     
        // $data = $request->all();
        $quantity = $request->input('quantity');
        $size = $request->input('size');
        if ($product != null) {
            $oldCart = Session('cart') ? Session('cart') : null;
            $newCart = new cart($oldCart);
            // Tạo đối tưởng cart rồi trỏ đến hàm addCart trong App\Cart
            $newCart->addCartItem($product, $request->id, $quantity,$size);
            // dd($newCart);die;
            // Dùng put để thêm sp vào giỏ hàng 
            $request->session()->put('cart', $newCart);
           
        }
        // dd($newCart);

        return redirect()->route('list-cart');
    }
    // Hàm hiển thị list danh sách sản phẩm 
    public function listProduct(Request $request)
    {
        $category = Category::where('parent_id', '=', null)->get();
        $product = Product::orderBy('id', 'desc')->Paginate(8);
        $size = Size::all();
        $color = Color::all();
        return view('client.product.list', compact('product', 'category', 'size', 'color'));
    }

    // Tạo hàm categoryProduct để hiển thị List(danh sách) sản phẩm(product) theo danh mục(category)
    // Truyền vào tham số request để lấy data
    public function categoryProduct(Request $request)
    {
        $category = Category::where('parent_id', '=', null)->get();
        $product = Product::orderBy('id', 'desc')->Paginate(6);
        // Lấy ra các sản phẩm thuộc fanh mục
        $product_by_id = Category::find($request->id)->hasProducts;
        return view('client.category.list', compact('category', 'product_by_id', 'product'));
    }

    // Hàm thêm sp vào cart item con 
    public function addCart(Request $request)
    {
        $product = Product::find($request->id);
        $size = $request->size;
        $quantity = $request->qty;
     
        // Kiểm tra xem có sản phẩm k, dùng session để lưu giỏ hàng
        if ($product != null) {
            // Kiểm tra giỏ hàng có tồn tại k 
            $oldCart = Session('cart') ? Session('cart') : null;
          
            $newCart = new cart($oldCart);
            // Tạo đối tưởng cart rồi trỏ đến hàm addCart trong App\Cart 
            $newCart->addCartItem($product, $request->id,$quantity,$size);
            // Dùng put để tạo session truyền vào cart(giỏ hàng), newcart(sản phẩm dc thêm mới) 
            $request->session()->put('cart', $newCart);
        }

        // Trả về view cart.list-smaill
        return view('client.cart.list-small');
    }

    // Hàm xóa sản phẩm trong cart item con
    public function deleteItemCart(Request $request)
    {
        // Gọi lại giỏ hàng cũ 
        $oldCart = Session('cart') ? Session('cart') : null;
   
        $newCart = new cart($oldCart);
        // Trỏ đối tượng newcart -> hàm delete Cart trong App\Cart để thực hiện xóa sp
        $newCart->deleteCart($request->id);
        // Kiểm tra số lượng sản phẩm, 

        if (count($newCart->products) > 0) {
            $request->session()->put('cart', $newCart);
        }else {
            $request->session()->forget('cart', $newCart);
        } 
        // dd($newCart);die;
        return redirect()->route('list-small');
     
    }
    public function listSmall()
    {
        return view('client.cart.list-small');
    }

    // Tạo hàm listcart để hiển thị danh sách sản phẩm ở trang list-cart 
    // Trả về trang view cart.list 
    public function listCart()
    {
        $category = Category::where('parent_id', '=', null)->get();
        return view('client.cart.list', compact('category'));
    }

    // Tạo hàm deleteListItemCart để xóa sản phẩm(product) trong cart
    // Truyền tham số request để lấy data 
    public function deleteListItemCart(Request $request)
    {
        // Gọi lại giỏ hàng cũ 
        $oldCart = Session('cart') ? Session('cart') : null;
    
        $newCart = new cart($oldCart);
        // Trỏ đối tượng newcart -> hàm deleteCart trong App\Cart để thực hiện xóa sp
        $newCart->deleteCart($request->id);
        // Kiểm tra số lượng sản phẩm
        if (count($newCart->products) > 0) {
            $request->session()->put('cart', $newCart);
        } else {
            $request->session()->forget('cart', $newCart);
        }
        // trả về view client.cart.list-carts
        return view('client.cart.list-carts');
    }

    // Tạo
    public function updateCart(Request $request)
    {

        $id = $request->id;
        $qty = $request->qty;
        $oldCart = Session('cart') ? Session('cart') : null;

        $newCart = new cart($oldCart);
        // Tạo đối tưởng cart rồi trỏ đến hàm addCart trong App\Cart 
        $newCart->updateCart($id, $qty);
        //    echo json_encode($newCart);
        // Dùng put để tạo session truyền vào cart(giỏ hàng), newcart(sản phẩm dc thêm mới) 
        $request->session()->put('cart', $newCart);


        //    // Trả về view cart.list-smaill
        return view('client.cart.list-carts');
        //    $data = $request->all();
        // //    var_dump($data);die;
    }

}

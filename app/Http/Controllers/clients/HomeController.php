<?php

namespace App\Http\Controllers\clients;

use App\Cart;
use App\Models\Category;
use App\Models\Color;
use App\Models\GalleryProduct;
use App\Models\Product;
use App\Models\Size;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Events\HelloPusherEvent;
use App\Repository\CateRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public $cateRepository;
    public function __construct(CateRepository $cateRepository)
    {
        $this->cateRepository = $cateRepository;
    }
    // Tạo hàm index để hiển thị lost product trên trang sản phẩm
    public function index()
    {
        $category = $this->cateRepository->getCate();
        // $cateAll = Category::all();
        $product = Product::orderBy('id', 'DESC')->Paginate(4);
        $product_hot = Product::orderBy('id', 'ASC')->Paginate(4);
        $product_list = Product::orderBy('created_at', 'ASC')->Paginate(8);

        return view('clients.home.index', compact('product', 'category','product_hot','product_list'));
    }


    //List danh sách các sản phẩm hot
    public function listProductHot(Request $request)
    {
        // $product = Product::orderBy('created_at', 'desc')->Paginate(8);
        $category = $this->cateRepository->getCate();
   
         if(isset($_GET['short_by'])){   
            $short_by = $_GET['short_by'];
            // echo($short_by);die;
            if($short_by == "tang_dan"){
               $product = Product::orderBy('price', 'ASC')->Paginate(8);
            }
            elseif($short_by == "giam_dan"){
                $product = Product::orderBy('price', 'DESC')->Paginate(8);
            }
            elseif($short_by == "kytu-az"){
                $product = Product::orderBy('title', 'ASC')->Paginate(8);
            }
            elseif($short_by == "kytu-za"){
                $product = Product::orderBy('title', 'DESC')->Paginate(8);
            }
        }
        else{
            $product = Product::orderBy('created_at', 'desc')->Paginate(5);
            $short_by = "";
        }
        return view('clients.products.list', compact('product', 'category','short_by'));
    }

    // tìm kiếm sản phẩm theo tên
    public function search(Request $request)
    {
        
        $category = $this->cateRepository->getCate();
        $keywords = $request->keyword_submit;

        if(isset($_GET['short_by'])){   
            $short_by = $_GET['short_by'];
            if($short_by == "tang_dan"){
               $product = Product::where('is_active',1)->Paginate(8)->sortBy("price");

            }
            elseif($short_by == "giam_dan"){
                $product = Product::where('is_active',1)->Paginate(8)->sortByDesc("price");
            }
            elseif($short_by == "kytu-az"){
                $product = Product::where('is_active',1)->Paginate(8)->sortBy("title");
            }
            elseif($short_by == "kytu-za"){
                $product = Product::where('is_active',1)->Paginate(8)->sortByDesc("title");
            }
        }
        else{
                $product = Product::where('title','like','%'.$keywords.'%')->orWhere('price','like','%'.$keywords.'%')->get();
                // dd($product);
        }

        return view('clients.products.search', compact('product', 'category'));
    }

    // Tạo hàm detail để show chi tiết product(sản phẩm)
    // Truyển tham số request vào để lấy data 
    public function detail(Request $request)
    {
        $product = Product::find($request->id);
        $cate = $product->hasCate->id;
        $product_related = Category::find($cate)->hasProducts;
        $category = $this->cateRepository->getCate();
        $size = Size::all();
        $gallery = GalleryProduct::where('product_id', $product->id)->get();
        return view('clients.products.detail', compact('product','cate', 'category', 'gallery', 'size', 'product_related'));
    }

    // Thêm sản phẩm vào giỏ hàng từ trang detail sản phẩm
    public function saveCart(Request $request )
    {
        $validate = $request->validate([
            'size'=>'required',
        ]);
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
                return redirect()->route('list-cart');     
        }
    }

    // Tạo hàm categoryProduct để hiển thị List(danh sách) sản phẩm(product) theo danh mục(category)
    // Truyền vào tham số request để lấy data
    public function categoryProduct(Request $request)
    {
        $cate = Category::find($request->id);
        $size = Size::all();
        $color = Color::all();
        $category = Category::where('parent_id', '=', null)->get();
        $product = Product::orderBy('id', 'desc')->Paginate(6);
      
        if(isset($_GET['short_by'])){  
            $short_by = $_GET['short_by']; 
            if($short_by == "tang_dan"){
                $product_by_id = Category::find($request->id)->hasProducts->sortBy("price");
            }
            elseif($short_by == "giam_dan"){
                $product_by_id = Category::find($request->id)->hasProducts->sortByDesc("price");
            }
            elseif($short_by == "kytu-az"){
                $product_by_id = Category::find($request->id)->hasProducts->sortBy("title");
            }
            elseif($short_by == "kytu-za"){
                $product_by_id = Category::find($request->id)->hasProducts->sortByDesc("title");
            }
        }
        // Lấy ra các sản phẩm thuộc fanh mục
        else{
             $product_by_id = Category::find($request->id)->hasProducts;
        }
        return view('clients.category.list', compact('category','size','color','cate', 'product_by_id', 'product'));
    }

 

    // Hàm thêm sp vào cart item con 
    public function addCart(Request $request)
    {
        
        $validate = $request->validate([
            'size'=>'required',
        ]);
       
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
        return view('clients.carts.list-small');
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
        return view('clients.carts.list-small');
    }

    // Tạo hàm listcart để hiển thị danh sách sản phẩm ở trang list-cart 
    // Trả về trang view cart.list 
    public function listCart()
    {
        $category = $this->cateRepository->getCate();
        return view('clients.carts.list', compact('category'));
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
        // trả về view clients.cart.list-carts
        return redirect()->route('list-cart-item');
    }

    public function listCartItem()
    {
        return view('clients.carts.list-carts');
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
        // dd($newCart);die;
        // Dùng put để tạo session truyền vào cart(giỏ hàng), newcart(sản phẩm dc thêm mới) 
        $request->session()->put('cart', $newCart);
        //    // Trả về view cart.list-smaill
        return view('clients.carts.list-carts');
        //    $data = $request->all();
        // //    var_dump($data);die;
    }

 
}

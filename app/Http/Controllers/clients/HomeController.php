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
use App\Repository\CategoryRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public $categoryRepository;
    // Khởi tạo hàm và truyền vào tham số categoryRepository, để sử dụng các hàm trong Repository
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * index.
     * 
     * @return home.index
     */
    public function index()
    {
        $category = $this->categoryRepository->getCate();
        $product = Product::orderBy('id', 'DESC')->Paginate(4);
        $product_hot = Product::orderBy('id', 'ASC')->Paginate(4);
        $product_list = Product::orderBy('created_at', 'ASC')->Paginate(8);
        return view('clients.home.index', compact('product', 'category', 'product_hot', 'product_list'));
    }


    /**
     * delete.
     * 
     * @param Request $request
     * 
     * @return product.list
     */
    public function listProductHot(Request $request)
    {
        $category = $this->categoryRepository->getCate();
        if (isset($_GET['short_by'])) {
            $short_by = $_GET['short_by'];
            if ($short_by == "tang_dan") {
                $product = Product::orderBy('price', 'ASC')->Paginate(8);
            } elseif ($short_by == "giam_dan") {
                $product = Product::orderBy('price', 'DESC')->Paginate(8);
            } elseif ($short_by == "kytu-az") {
                $product = Product::orderBy('title', 'ASC')->Paginate(8);
            } elseif ($short_by == "kytu-za") {
                $product = Product::orderBy('title', 'DESC')->Paginate(8);
            }
        } else {
            $product = Product::orderBy('created_at', 'desc')->Paginate(5);
            $short_by = "";
        }
        return view('clients.products.list', compact('product', 'category', 'short_by'));
    }

    /**
     * search.
     * 
     * @param Request $request
     * 
     * @return product.search
     */
    public function search(Request $request)
    {

        $category = $this->categoryRepository->getCate();
        $keywords = $request->keyword_submit;

        if (isset($_GET['short_by'])) {
            $short_by = $_GET['short_by'];
            if ($short_by == "tang_dan") {
                $product = Product::where('is_active', 1)->Paginate(8)->sortBy("price");
            } elseif ($short_by == "giam_dan") {
                $product = Product::where('is_active', 1)->Paginate(8)->sortByDesc("price");
            } elseif ($short_by == "kytu-az") {
                $product = Product::where('is_active', 1)->Paginate(8)->sortBy("title");
            } elseif ($short_by == "kytu-za") {
                $product = Product::where('is_active', 1)->Paginate(8)->sortByDesc("title");
            }
        } else {
            $product = Product::where('title', 'like', '%' . $keywords . '%')->orWhere('price', 'like', '%' . $keywords . '%')->get();
        }

        return view('clients.products.search', compact('product', 'category'));
    }

    /**
     * detail.
     * 
     * @param Request $request
     * 
     * @return product.detail
     */
    public function detail(Request $request)
    {
        $product = Product::find($request->id);
        $cate = $product->hasCate->id;
        $product_related = Category::find($cate)->hasProducts;
        $category = $this->categoryRepository->getCate();
        $size = Size::all();
        $gallery = GalleryProduct::where('product_id', $product->id)->get();
        return view('clients.products.detail', compact('product', 'cate', 'category', 'gallery', 'size', 'product_related'));
    }

    /**
     * saveCart.
     * 
     * @param Request $request
     * 
     * @return list-cart
     */
    public function saveCart(Request $request)
    {
        $validate = $request->validate([
            'size' => 'required',
        ]);
        $product = Product::find($request->id);
        $quantity = $request->input('quantity');
        $size = $request->input('size');
        if ($product != null) {
            $oldCart = Session('cart') ? Session('cart') : null;
            $newCart = new cart($oldCart);
            // Tạo đối tưởng cart rồi trỏ đến hàm addCart trong App\Cart
            $newCart->addCartItem($product, $request->id, $quantity, $size);
            // dd($newCart);die;
            // Dùng put để thêm sp vào giỏ hàng 
            $request->session()->put('cart', $newCart);
            return redirect()->route('list-cart');
        }
    }

    /**
     * saveCart.
     * 
     * @param Request $request
     * 
     * @return category.list
     */
    public function listCategoryProduct(Request $request)
    {
        $cate = Category::find($request->id);
        $size = Size::all();
        $category = Category::where('parent_id', '=', null)->get();
        if (isset($_GET['short_by'])) {
            $short_by = $_GET['short_by'];
            if ($short_by == "tang_dan") {
                $product_by_id = Category::find($request->id)->hasProducts->sortBy("price");
            } elseif ($short_by == "giam_dan") {
                $product_by_id = Category::find($request->id)->hasProducts->sortByDesc("price");
            } elseif ($short_by == "kytu-az") {
                $product_by_id = Category::find($request->id)->hasProducts->sortBy("title");
            } elseif ($short_by == "kytu-za") {
                $product_by_id = Category::find($request->id)->hasProducts->sortByDesc("title");
            }
        }
        else {
            $product_by_id = Category::find($request->id)->hasProducts;
            $short_by = "";
        }
        return view('clients.products.list-category', compact('category','short_by','size', 'cate', 'product_by_id'));
    }

        /**
     * saveCart.
     * 
     * @param Request $request
     * 
     * @return category.list
     */
    public function listSizeProduct(Request $request)
    {
        $size = Size::all();
        $category = Category::where('parent_id', '=', null)->get();
        if (isset($_GET['short_by'])) {
            $short_by = $_GET['short_by'];
            if ($short_by == "tang_dan") {
                $sizeProduct = Size::find($request->id)->product->sortBy("price");
            } elseif ($short_by == "giam_dan") {
                $sizeProduct = Size::find($request->id)->product->sortByDesc("price");
            } elseif ($short_by == "kytu-az") {
                $sizeProduct = Size::find($request->id)->product->sortBy("title");
            } elseif ($short_by == "kytu-za") {
                $sizeProduct = Size::find($request->id)->product->sortByDesc("title");
            }
        }
        else {
            $sizeProduct = Size::find($request->id)->product;
            $short_by = "";
        }
        $nameSize = Size::find($request->id)->name;
       
        return view('clients.products.list-size', compact('category','short_by','nameSize','size','sizeProduct'));
    }

    /**
     * addCart.
     * 
     * @param Request $request
     * 
     * @return list-small
     */
    public function addCart(Request $request)
    {
        $validate = $request->validate([
            'size' => 'required',
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
            $newCart->addCartItem($product, $request->id, $quantity, $size);
            // Dùng put để tạo session truyền vào cart(giỏ hàng), newcart(sản phẩm dc thêm mới) 
            $request->session()->put('cart', $newCart);
        }
        return view('clients.carts.list-small');
    }

    /**
     * deleteItemCart.
     * 
     * @param Request $request
     * 
     * @return list-small
     */
    public function deleteItemCart(Request $request)
    {
        $oldCart = Session('cart') ? Session('cart') : null;
        $newCart = new cart($oldCart);
        $newCart->deleteCart($request->id);
        if (count($newCart->products) > 0) {
            $request->session()->put('cart', $newCart);
        } else {
            $request->session()->forget('cart', $newCart);
        }
        return redirect()->route('list-small');
    }

    /**
     * deleteItemCart.
     * 
     * @return list-small
     */
    public function listSmall()
    {
        return view('clients.carts.list-small');
    }

    /**
     * listCart.
     * 
     * @param Request $request
     * 
     * @return carts.;list
     */
    public function listCart()
    {
        $category = $this->categoryRepository->getCate();
        return view('clients.carts.list', compact('category'));
    }
    /**
     * deleteListItemCart.
     * 
     * @param Request $request
     * 
     * @return list-cart-item
     */
    public function deleteListItemCart(Request $request)
    {
      
        $oldCart = Session('cart') ? Session('cart') : null;
        $newCart = new cart($oldCart);
        $newCart->deleteCart($request->id);
        if (count($newCart->products) > 0) {
            $request->session()->put('cart', $newCart);
        } else {
            $request->session()->forget('cart', $newCart);
        }
        return redirect()->route('list-cart-item');
    }

     /**
     * listCartItem.
     * 
     * @param Request $request
     * 
     * @return list-cart
     */
    public function listCartItem()
    {
        return view('clients.carts.list-carts');
    }

     /**
     * updateCart.
     * 
     * @param Request $request
     * 
     * @return list-carts
     */
    public function updateCart(Request $request)
    {
        $id = $request->id;
        $qty = $request->qty;
        $oldCart = Session('cart') ? Session('cart') : null;
        $newCart = new cart($oldCart);
        $newCart->updateCart($id, $qty);
        $request->session()->put('cart', $newCart);
        return view('clients.carts.list-carts');
    }
}

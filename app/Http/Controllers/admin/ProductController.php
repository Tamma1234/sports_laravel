<?php

namespace App\Http\Controllers\Admin;

use App\Models\Size;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\EditProductRequest;
use App\Models\Bill;
use App\Models\GalleryProduct;

class ProductController extends Controller
{

      /**
     * index.
     * 
     * @return product.index
     */
    public function index()
    {
        $product = Product::orderBy('id', 'desc')->Paginate(5);
        return view('admin.products.index', compact('product'));
    }

     /**
     * create.
     * 
     * @return product.create
     */
    public function create()
    {
        $category = Category::all();
        $size = Size::all();
        return view('admin.products.create', compact('category', 'size'));
    }

    /**
     * store.
     * 
     * @param EditProductRequest $request
     * 
     * @return product.index
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->saveAdd($request);
        return redirect()->route('product.index')->with('msg', 'Thêm sản phẩm thành công');
    }

    /**
     * edit.
     * 
     * @param Request $request
     * 
     * @return product.edit
     */
    public function edit(Request $request)
    {
        $category = Category::all();
        $size = Size::all();
        $product = Product::find($request->id);
        return view('admin.products.edit', compact('category', 'product', 'size'));
    }


    /**
     * update.
     * 
     * @param EditProductRequest $request
     * 
     * @return product.index
     */
    public function update(EditProductRequest $request)
    {
        $product = new Product();
        $product->saveEdit($request);
        return redirect()->route('product.index')
            ->with('msg', 'Cập nhật thành công');
    }

    /**
     * delete.
     * 
     * @param Request $request
     * 
     * @return product.index
     */
    public function delete(Request $request)
    {
        $product = Product::find($request->id);
        $bills = $product->bills;
        $gallery = $product->showGallery;
        foreach ($gallery as $item) {
            $galleryall = GalleryProduct::find($item->id);
            Storage::disk('public')->delete($galleryall->filename);
            $galleryall->delete();
        }
        foreach ($bills as $value) {
            $value->bill_active  = 4;
            $value->save();
        }

        Storage::disk('public')->delete($product->image_url);
        $product->delete();
        return redirect()->route('product.index')->with('msg', 'Xóa sản phẩm thành công');
    }
}

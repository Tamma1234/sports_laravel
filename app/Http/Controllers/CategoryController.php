<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Product;

class CategoryController extends Controller
{
    // Tạo hàm index để hiển thị list data category
    // Sau đó trả về vỉew admin.category.index
    public function index()
    {
        $category = Category::orderBy('id', 'desc')->Paginate(3);
        return view('admin.category.index', compact('category'));
    }

    // Tạo hàm create để thêm danh mục
    // Trả về form create trong view admin.category.index
    public function create()
    {
        $category = Category::all();
        return view('admin.category.create', compact('category'));
    }

    // Tạo hàm store để lưu danh mục khi thêm với tham số truyền vào là CategoryRequest(validate), $request 
    // Gọi hàm saveAdd($request) trong Models category để lưu data 
    // Sau đó chuyển hướng về category.index
    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->saveAdd($request);
        return redirect()->route('category.index');
    }

    // Tạo hàm delete để xóa data, truyền tham số request để gọi data cần xóa
    // Xóa xong thì chuyển hướng về category.index
    public function delete(Request $request)
    {
        $category = Category::find($request->id);
        $category->delete();
        return redirect()->route('category.index')->with('msg', 'Xóa danh mục thành công');
    }


    // Tạo hàm edit để sửa danh mục 
    // Trả về form edit trong view admin.category.index
    public function edit(Request $request)
    {
        $cates = Category::where('id', '!=', $request->id)->get();
        $category = Category::find($request->id);
        return view('admin.category.edit', compact('category', 'cates'));
    }

    // Tạo hàm store để lưu danh mục khi sửa với tham số truyền vào là CategoryRequest(validate), $request 
    // Gọi hàm saveUpdate($request) trong Models category để thực hiện lưu data 
    // Sau đó chuyển hướng về category.index
    public function update(CategoryRequest $request)
    {
        $category = new Category();
        $category->saveUpdate($request->id);
        return redirect()->route('category.index');
    }
}

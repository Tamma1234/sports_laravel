<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
      
       
        $category = Category::orderBy('id', 'desc')->Paginate(3);
        return view('admin.category.index', compact('category'));
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.category.create',compact('category'));
    }

    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->saveCate($request);
        return redirect()->route('category.index');
    }

    public function delete(Request $request)
    {
        $category = Category::find($request->id);
        $category->delete();
        return redirect()->route('category.index')->with('msg', 'Xóa danh mục thành công');
    }

    public function edit(Request $request)
    {
        // var_dump($request->id);die;
        $cates = Category::where('id','!=',$request->id)->get();

        $category = Category::find($request->id);
        // echo '<pre>';
        // var_dump($category);die;
        return view('admin.category.edit', compact('category','cates'));
    }

    public function update(CategoryRequest $request)
    {
        $category = new Category();
        $category->saveUpdate($request->id);
     return redirect()->route('category.index');
    }
}

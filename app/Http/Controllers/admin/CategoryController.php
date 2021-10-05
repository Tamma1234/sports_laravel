<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
   
    /**
     * index.
     * 
     * @param Request $request
     * 
     * @return category.index
     */
    public function index()
    {
        $category = Category::orderBy('id', 'desc')->Paginate(3);
        return view('admin.category.index', compact('category'));
    }

    
    /**
     * create.
     * 
     * @param Request $request
     * 
     * @return category.create
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.category.create', compact('category'));
    }

    
    /**
     * store.
     * 
     * @param Request $request
     * 
     * @return category.index
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->saveAdd($request);
        return redirect()->route('category.index');
    }

   
    /**
     * delete.
     * 
     * @param Request $request
     * 
     * @return category.index
     */
    public function delete(Request $request)
    {
        $category = Category::find($request->id);
        $category->delete();
        return redirect()->route('category.index')->with('msg', 'Xóa danh mục thành công');
    }

    /**
     * edit.
     * 
     * @param Request $request
     * 
     * @return category.edit
     */
    public function edit(Request $request)
    {
        $cates = Category::where('id', '!=', $request->id)->get();
        $category = Category::find($request->id);
        return view('admin.category.edit', compact('category', 'cates'));
    }


    /**
     * update.
     * 
     * @param CategoryRequest $request
     * 
     * @return category.index
     */
    public function update(CategoryRequest $request)
    {
        $category = new Category();
        $category->saveUpdate($request);
        return redirect()->route('category.index');
    }
}

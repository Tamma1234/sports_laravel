<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Size;
use App\Http\Controllers\Controller;

class SizeController extends Controller
{

    /**
     * index.
     * 
     * @param Request $request
     * 
     * @return size.index
     */
    public function index()
    {
        $size = Size::orderBy('id', 'desc')->Paginate(3);
        return view('admin.sizes.index', compact('size'));
    }

    /**
     * create.
     * 
     * @param Request $request
     * 
     * @return size.create
     */
    public function create()
    {
        return view('admin.sizes.create');
    }

    /**
     * store.
     * 
     * @param Request $request
     * 
     * @return orders.index
     */
    public function store(Request $request)
    {
        $size = new Size();
        $size->savesize($request);
        return redirect()->route('size.index');
    }

    /**
     * delete.
     * 
     * @param Request $request
     * 
     * @return size.index
     */
    public function delete(Request $request)
    {
        $size = Size::find($request->id);
        $size->delete();
        return redirect()->route('size.index')->with('msg', 'Xóa danh mục thành công');
    }

    /**
     * edit.
     * 
     * @param Request $request
     * 
     * @return size.edit
     */
    public function edit(Request $request)
    {
        $size = Size::find($request->id);
        return view('admin.sizes.edit', compact('size'));
    }

    /**
     * update.
     * 
     * @param Request $request
     * 
     * @return size.index
     */
    public function update(Request $request)
    {
        $size = new Size();
        $size->savesize($request);
        return redirect()->route('size.index');
    }
}
